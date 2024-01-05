<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Builders\CreateSubscriptionComponentBuilder;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreateSubscriptionComponent;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\DataLoader\TestComponentLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCouponLoader;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;
use AdvancedBillingLib\Tests\TestData\SubscriptionTestData;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;
use DateTime;

final class SubscriptionsControllerTestData
{
    public function __construct(
        private TestSubscriptionFactory $subscriptionFactory,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory,
        private TestPaymentProfileFactory $paymentProfileFactory,
        private TestCustomerLoader $customerLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestPaymentProfileLoader $paymentProfileLoader,
        private TestProductLoader $productLoader,
        private TestComponentLoader $componentLoader,
        private TestCouponLoader $couponLoader
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
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt,
            $nextProductPricePointId,
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
            $signupPaymentId,
            $currentPeriodStartedAt,
            $nextAssessmentAt,
            $currentPeriodEndsAt,
            $nextProductPricePointId,
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

    public function loadProductFamily(string $name): ProductFamily
    {
        return $this->productFamilyLoader->load($name);
    }

    public function loadProduct(string $name, string $handle, int $productFamilyId): Product
    {
        return $this->productLoader->load($name, $handle, $productFamilyId);
    }

    public function loadCustomerWithPredefinedData(): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithPredefinedData();
    }

    public function loadCustomCustomer(string $firstName, string $lastName, string $email): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithCustomData($firstName, $lastName, $email);
    }

    public function loadPaymentProfile(int $customerId): CreatedPaymentProfile
    {
        return $this->paymentProfileLoader->load($customerId);
    }

    public function loadComponent(int $productFamilyId): Component
    {
        return $this->componentLoader->loadQuantityBasedComponent(
            $productFamilyId,
            ComponentTestData::QUANTITY_BASED_COMPONENT_KIND_PATH
        );
    }

    /**
     * @param array<int, CreateSubscriptionComponent> $components
     */
    public function getCreateSubscriptionWithComponentsRequest(
        int $customerId,
        int $productId,
        int $paymentProfileId,
        array $components
    ): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->createWithComponents(
            $customerId,
            $productId,
            $paymentProfileId,
            $components
        );
    }

    public function getCreateSubscriptionComponent(Component $component): CreateSubscriptionComponent
    {
        return CreateSubscriptionComponentBuilder::init()
            ->componentId($component->getId())
            ->allocatedQuantity(1)
            ->pricePointId($component->getDefaultPricePointId())
            ->build();
    }

    public function getExpectedSubscriptionWithComponentPrice(
        Subscription $subscription,
        Customer $customer,
        Product $product,
        CreatedPaymentProfile $paymentProfile,
    ): Subscription
    {
        return $this->subscriptionFactory->createWithComponentPrice(
            $subscription->getId(),
            $subscription->getCreatedAt(),
            $subscription->getUpdatedAt(),
            $subscription->getActivatedAt(),
            $customer,
            $product,
            $this->paymentProfileFactory->fromCreatedPaymentProfile($paymentProfile),
            $subscription->getProductPricePointId(),
            $subscription->getNextProductPricePointId(),
            $subscription->getSignupPaymentId(),
            $subscription->getCurrentPeriodStartedAt(),
            $subscription->getNextAssessmentAt(),
            $subscription->getCurrentPeriodEndsAt(),
        );
    }

    public function loadCoupon(int $productFamilyId, string $couponCode): Coupon
    {
        return $this->couponLoader->load(
            productFamilyId: $productFamilyId,
            couponCode: $couponCode
        );
    }

    /**
     * @param array<int, CreateSubscriptionComponent> $components
     * @param array<int, Coupon> $coupons
     */
    public function getCreateSubscriptionWithComponentsAndCouponsRequest(
        int $customerId,
        int $productId,
        int $paymentProfileId,
        array $components,
        array $coupons
    ): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->createWithComponentsAndCoupons(
            $customerId,
            $productId,
            $paymentProfileId,
            $components,
            $coupons
        );
    }

    public function getCreateSubscriptionWithProratedBillingRequest(
        int $customerId,
        int $productId,
        int $paymentProfileId,
    ): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->createCreateSubscriptionWithProratedBillingRequest(
            $customerId,
            $productId,
            $paymentProfileId,
            $this->getSnapDay()
        );
    }

    public function getSnapDay(): int
    {
        return SubscriptionTestData::SNAP_DAY_15;
    }
}
