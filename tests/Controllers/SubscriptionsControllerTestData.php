<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;
use DateTime;

final class SubscriptionsControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductRequestFactory $productRequestFactory,
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestSubscriptionFactory $subscriptionFactory,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory,
        private TestPaymentProfileFactory $paymentProfileFactory
    )
    {
    }

    public function getExpectedSubscription(
        int $subscriptionId,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $activatedAt,
        Customer $customer,
        Product $product,
        CreatedPaymentProfile $paymentProfile,
        int $productPricePointId,
        ?int $nextProductPricePointId,
        int $signupPaymentId,
        DateTime $currentPeriodStartedAt,
        DateTime $nextAssessmentAt,
        DateTime $currentPeriodEndsAt
    ): Subscription
    {
        return $this->subscriptionFactory->create(
            $subscriptionId,
            $createdAt,
            $updatedAt,
            $activatedAt,
            $customer,
            $product,
            $this->paymentProfileFactory->fromCreatedPaymentProfile($paymentProfile),
            $productPricePointId,
            $nextProductPricePointId,
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt
        );
    }
    public function getExpectedSubscriptionWithoutBillingAmount(
        int $subscriptionId,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $activatedAt,
        Customer $customer,
        Product $product,
        CreatedPaymentProfile $paymentProfile,
        int $productPricePointId,
        ?int $nextProductPricePointId,
        int $signupPaymentId,
        DateTime $currentPeriodStartedAt,
        DateTime $nextAssessmentAt,
        DateTime $currentPeriodEndsAt
    ): Subscription
    {
        return $this->subscriptionFactory->createWithoutBillingAmount(
            $subscriptionId,
            $createdAt,
            $updatedAt,
            $activatedAt,
            $customer,
            $product,
            $this->paymentProfileFactory->fromCreatedPaymentProfile($paymentProfile),
            $productPricePointId,
            $nextProductPricePointId,
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt
        );
    }

    public function getCreateSubscriptionRequest(
        int $customerId,
        int $productId,
        int $paymentProfileId
    ): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->create($customerId, $productId, $paymentProfileId);
    }

    public function loadProductFamily(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_FIVE))
            ->getProductFamily();
    }

    public function loadProduct(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_TWO, ProductTestData::HANDLE_TWO)
            )
            ->getProduct();
    }

    public function loadCustomer(): Customer
    {
        return $this->client
            ->getCustomersController()
            ->createCustomer($this->customerRequestFactory->createCreateCustomerRequest())
            ->getCustomer();
    }

    public function loadPaymentProfile(int $customerId): CreatedPaymentProfile
    {
        return $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory->create($customerId))
            ->getPaymentProfile();
    }

    public function loadProductFamilyTwo(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_SIX))
            ->getProductFamily();
    }

    public function loadProductTwo(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_THREE, ProductTestData::HANDLE_THREE)
            )
            ->getProduct();
    }
}
