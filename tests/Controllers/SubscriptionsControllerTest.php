<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
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
        $productFamily = $this->testData->loadProductFamily();
        $product = $this->testData->loadProduct($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $response = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId()
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
                $paymentProfile,
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
        $productFamily = $this->testData->loadProductFamilyThree();
        $product = $this->testData->loadProductThree($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());
        $component = $this->testData->loadComponent($productFamily->getId());

        $response = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithComponentsRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId(),
                    [$this->testData->getCreateSubscriptionComponent($component)]
                )
            );
        $subscription = $response->getSubscription();

        $this->assertions->assertCreatedSubscriptionHasExpectedData(
            $this->testData->getExpectedSubscriptionWithComponentPrice(
                $subscription,
                $customer,
                $product,
                $paymentProfile,
            ),
            $subscription
        );

        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
        $this->cleaner->archiveProductById($product->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::readSubscription
     */
    public function test_ReadSubscription_ShouldReturnSubscription_WhenSubscriptionWithProvidedIdExists(): void
    {
        $productFamily = $this->testData->loadProductFamilyTwo();
        $product = $this->testData->loadProductTwo($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());
        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId()
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
                $paymentProfile,
                $subscription->getProductPricePointId(),
                $subscription->getNextProductPricePointId(),
                $subscription->getSignupPaymentId(),
                $subscription->getCurrentPeriodStartedAt(),
                $subscription->getNextAssessmentAt(),
                $subscription->getCurrentPeriodEndsAt()
            ),
            $response->getSubscription()
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $paymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenTwoCouponsAndOneComponentProvided(): void
    {
        $productFamily = $this->testData->loadProductFamilyFour();
        $product = $this->testData->loadProductFour($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());
        $component = $this->testData->loadComponent($productFamily->getId());
        $couponOne = $this->testData->loadCouponOne($productFamily->getId());
        $couponTwo = $this->testData->loadCouponTwo($productFamily->getId());

        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithComponentsAndCouponsRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId(),
                    [$this->testData->getCreateSubscriptionComponent($component)],
                    [$couponOne, $couponTwo]
                )
            )
            ->getSubscription();

        $this->assertions->assertReturnedSubscriptionWithPriceAffectedByCoupons(
            $subscription,
            [$couponOne, $couponTwo]
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $paymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldCreateSubscription_WhenProratedBillingChargeSet(): void
    {
        $productFamily = $this->testData->loadProductFamilyFive();
        $product = $this->testData->loadProductFive($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());

        $subscription = $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithProratedBillingRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId(),
                )
            )
            ->getSubscription();

        $this->assertions->assertSubscriptionWithProratedCalendarBillingCreated(
            $subscription,
            $this->testData->getSnapDay()
        );

        $this->cleaner->removeSubscriptionPaymentProfileById($subscription->getId(), $paymentProfile->getId());
        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SubscriptionsController::createSubscription
     */
    public function test_CreateSubscription_ShouldThrowExceptionWith401StatusCode_WhenTryToCreateSubscriptionAsUnauthorizedUser(
    ): void
    {
        $productFamily = $this->testData->loadProductFamilySix();
        $product = $this->testData->loadProductSix($productFamily->getId());
        $customer = $this->testData->loadCustomer();
        $paymentProfile = $this->testData->loadPaymentProfile($customer->getId());
        $unauthenticatedClient = $this->getUnauthenticatedClient();

        $this->assertions->assertSubscriptionCannotBeCreatedByUnauthorizedUser();
        $unauthenticatedClient
            ->getSubscriptionsController()
            ->createSubscription(
                $this->testData->getCreateSubscriptionWithProratedBillingRequest(
                    $customer->getId(),
                    $product->getId(),
                    $paymentProfile->getId(),
                )
            )
            ->getSubscription();

        $this->cleaner->removeUnusedPaymentProfileById($paymentProfile->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new SubscriptionsControllerTestData(
            $this->client,
            new TestProductFamilyRequestFactory(),
            new TestProductRequestFactory(),
            new TestCustomerRequestFactory(),
            new TestSubscriptionFactory(),
            new TestSubscriptionRequestFactory(),
            new TestPaymentProfileRequestFactory(),
            new TestPaymentProfileFactory(),
            new TestComponentRequestFactory(),
            new TestCouponRequestFactory()
        );
        $this->assertions = new SubscriptionsControllerTestAssertions($this);
    }
}
