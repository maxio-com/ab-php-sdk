<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\ResourceType;
use AdvancedBillingLib\Tests\DataLoader\TestComponentLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestMetadataLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomFieldsRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class SubscriptionsControllerTest extends TestCase
{
    private SubscriptionsControllerTestData $testData;
    private SubscriptionsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenAllProvidedDataAreCorrect(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_1');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 1',
            handle: 'subscriptionscontrollertest-product-1',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());

        $response = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId()
                )
            );
        $subscription = $response->getSubscription();

        $this->assertions->assertCreatedSubscriptionHasExpectedData(
            $this->testData->getExpectedSubscriptionWithoutBillingAmount(
                $subscription->getId(),
                $subscription->getCreatedAt(),
                $subscription->getUpdatedAt(),
                $subscription->getActivatedAt(),
                $customer,
                $product,
                $creditCardPaymentProfile,
                $subscription->getProductPricePointId(),
                $subscription->getNextProductPricePointId(),
                $subscription->getSignupPaymentId(),
                $subscription->getCurrentPeriodStartedAt(),
                $subscription->getNextAssessmentAt(),
                $subscription->getCurrentPeriodEndsAt(),
            ),
            $subscription
        );

        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
        $this->cleaner->archiveProductById($product->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenQuantityBasedComponentProvided(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_2');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 2',
            handle: 'subscriptionscontrollertest-product-2',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $component = $this->testData->loadComponent($productFamily->getId());

        $response = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithComponentsRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId(),
                    [$this->testData->getCreateSubscriptionComponent($component)]
                )
            );
        $subscription = $response->getSubscription();

        $this->assertions->assertCreatedSubscriptionHasExpectedData(
            $this->testData->getExpectedSubscriptionWithComponentPrice(
                $subscription,
                $customer,
                $product,
                $creditCardPaymentProfile,
            ),
            $subscription
        );

        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
        $this->cleaner->archiveProductById($product->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenTwoCouponsAndOneComponentProvided(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_3');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 3',
            handle: 'subscriptionscontrollertest-product-3',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $component = $this->testData->loadComponent($productFamily->getId());
        $couponOne = $this->testData->loadCoupon($productFamily->getId(), 'SubscriptionsControllerTest_Coupon_1');
        $couponTwo = $this->testData->loadCoupon($productFamily->getId(), 'SubscriptionsControllerTest_Coupon_2');

        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithComponentsAndCouponsRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId(),
                    [$this->testData->getCreateSubscriptionComponent($component)],
                    [$couponOne, $couponTwo]
                )
            )
            ->getSubscription();

        $this->assertions->assertReturnedSubscriptionWithPriceAffectedByCoupons(
            $subscription,
            [$couponOne, $couponTwo]
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenProratedBillingChargeSet(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_4');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 4',
            handle: 'subscriptionscontrollertest-product-4',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());

        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithProratedBillingRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId(),
                )
            )
            ->getSubscription();

        $this->assertions->assertSubscriptionWithProratedCalendarBillingCreated(
            $subscription,
            $this->testData->getSnapDay()
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldThrowExceptionWith401StatusCode_WhenTryToCreateSubscriptionAsUnauthorizedUser(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_5');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 5',
            handle: 'subscriptionscontrollertest-product-5',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomCustomer(
            firstName: 'SubscriptionsControllerTest_CustomerFN_1',
            lastName: 'SubscriptionsControllerTest_CustomerLN_1',
            email: 'sct1email@example.com',
            reference: 'sct_ref_1',
            vatNumber: 'sct_vat_1'
        );
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $unauthenticatedClient = $this->getUnauthenticatedClient();

        $this->assertions->assertSubscriptionCannotBeCreatedByUnauthorizedUser();
        $unauthenticatedClient
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithProratedBillingRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId(),
                )
            )
            ->getSubscription();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldThrowExceptionWith422StatusCode_WhenCustomerNotFound(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_6');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 6',
            handle: 'subscriptionscontrollertest-product-6',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomCustomer(
            firstName: 'SubscriptionsControllerTest_CustomerFN_2',
            lastName: 'SubscriptionsControllerTest_CustomerLN_2',
            email: 'sct2email@example.com',
            reference: 'sct_ref_2',
            vatNumber: 'sct_vat_2'
        );
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());

        try {
            $this->client
                ->getSubscriptionsController()
                ->createSubscription(
                    $this->testData->getCreateSubscriptionWithProratedBillingRequest(
                        $this->testData->getNotExistingCustomerId(),
                        $product->getId(),
                        $creditCardPaymentProfile->getId(),
                    )
                )
                ->getSubscription();
        } catch (ApiException $e) {
            $this->assertions->assertSubscriptionCannotBeCreatedBecauseCustomerNotFound($e);
        }

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::readSubscription
     */
    public function test_ReadSubscription_ShouldReturnSubscription_WhenSubscriptionWithProvidedIdExists(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_7');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 7',
            handle: 'subscriptionscontrollertest-product-7',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId()
                )
            )
            ->getSubscription();

        $response = $this->client->getSubscriptionsController()->readSubscription($subscription->getId());

        $this->assertions->assertExpectedSubscriptionReturned(
            $this->testData->getExpectedSubscription(
                $subscription->getId(),
                $subscription->getCreatedAt(),
                $subscription->getUpdatedAt(),
                $subscription->getActivatedAt(),
                $customer,
                $product,
                $creditCardPaymentProfile,
                $subscription->getProductPricePointId(),
                $subscription->getNextProductPricePointId(),
                $subscription->getSignupPaymentId(),
                $subscription->getCurrentPeriodStartedAt(),
                $subscription->getNextAssessmentAt(),
                $subscription->getCurrentPeriodEndsAt()
            ),
            $response->getSubscription()
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::readSubscription
     */
    public function test_ReadSubscription_ShouldReturnSubscriptionWithCoupons_WhenCouponsAddedToSubscription(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_8');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 8',
            handle: 'subscriptionscontrollertest-product-8',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $couponOne = $this->testData->loadCoupon($productFamily->getId(), 'SubscriptionsControllerTest_Coupon_3');
        $couponTwo = $this->testData->loadCoupon($productFamily->getId(), 'SubscriptionsControllerTest_Coupon_4');
        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->createSubscriptionWithCouponsRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId(),
                    [$couponOne, $couponTwo]
                )
            )
            ->getSubscription();

        $response = $this->client
            ->getSubscriptionsController()
            ->readSubscription($subscription->getId(), ['coupons'])
            ->getSubscription();

        $this->assertions->assertSubscriptionWithCouponsCreated($response);

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::listSubscriptions
     */
    public function test_ListSubscriptions_ShouldReturnSubscriptionByMetadata_WhenSubscriptionHasMetadata(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_9');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 9',
            handle: 'subscriptionscontrollertest-product-9',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId()
                )
            )
            ->getSubscription();
        $metadata = $this->testData->loadMetadataForSubscription($subscription->getId());

        $results = $this->client
            ->getSubscriptionsController()
            ->listSubscriptions($this->testData->getOptionsToFilterByMetadata());

        $this->assertions->assertSubscriptionFoundByMetadata($results, $subscription);

        $this->cleaner->removeMetadata(ResourceType::SUBSCRIPTIONS, $subscription->getId(), $metadata[0]->getName());
        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::listSubscriptions
     */
    public function test_ListSubscriptions_ShouldEmptyList_WhenNotFoundSubscriptionWithMetadata(): void
    {
        $productFamily = $this->testData->loadProductFamily(name: 'SubscriptionControllerTest_ProductFamily_10');
        $product = $this->testData->loadProduct(
            name: 'SubscriptionsControllerTest Product 10',
            handle: 'subscriptionscontrollertest-product-10',
            productFamilyId: $productFamily->getId()
        );
        $customer = $this->testData->loadCustomerWithPredefinedData();
        $creditCardPaymentProfile = $this->testData->loadCreditCardPaymentProfile($customer->getId());
        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $creditCardPaymentProfile->getId()
                )
            )
            ->getSubscription();
        $this->testData->loadMetadataForSubscription($subscription->getId());

        $results = $this->client
            ->getSubscriptionsController()
            ->listSubscriptions($this->testData->getOptionsToFilterByNotExistingMetadata());

        $this->assertions->assertSubscriptionNotFoundByMetadata($results);

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $creditCardPaymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new SubscriptionsControllerTestData(
            new TestSubscriptionFactory(),
            new TestSubscriptionRequestFactory(),
            new TestPaymentProfileFactory(),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory()),
            new TestComponentLoader($this->client, new TestComponentRequestFactory()),
            new TestCouponLoader($this->client, new TestCouponRequestFactory()),
            new TestMetadataLoader($this->client, new TestCustomFieldsRequestFactory())
        );
        $this->assertions = new SubscriptionsControllerTestAssertions($this);
    }
}
