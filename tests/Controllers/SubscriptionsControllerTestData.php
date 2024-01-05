<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
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
use AdvancedBillingLib\Tests\TestData\ComponentTestData;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use AdvancedBillingLib\Tests\TestData\SubscriptionTestData;
use AdvancedBillingLib\Tests\TestFactory\TestComponentRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCouponRequestFactory;
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
        private TestPaymentProfileFactory $paymentProfileFactory,
        private TestComponentRequestFactory $componentRequestFactory,
        private TestCouponRequestFactory $couponRequestFactory
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
            ->createPaymentProfile($this->paymentProfileRequestFactory->createCreatePaymentProfileRequest($customerId))
            ->getPaymentProfile();
    }

    public function loadProductFamilyTwo(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_SIX))
            ->getProductFamily();
    }

    public function loadProductFamilyThree(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_ELEVEN)
            )
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

    public function loadComponent(int $productFamilyId): Component
    {
        return $this->client
            ->getComponentsController()
            ->createComponent(
                $productFamilyId,
                ComponentTestData::QUANTITY_BASED_COMPONENT_KIND_PATH,
                $this->componentRequestFactory->createCreateQuantityBasedComponent()
            )
            ->getComponent();
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

    public function loadProductThree(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_SIX, ProductTestData::HANDLE_SIX)
            )
            ->getProduct();
    }

    public function loadCouponOne(int $productFamilyId): Coupon
    {
        return $this->client
            ->getCouponsController()
            ->createCoupon(
                $productFamilyId,
                $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequest(
                    (string) $productFamilyId,
                    CouponTestData::CODE_TWO
                )
            )
            ->getCoupon();
    }

    public function loadCouponTwo(int $productFamilyId): Coupon
    {
        return $this->client
            ->getCouponsController()
            ->createCoupon(
                $productFamilyId,
                $this->couponRequestFactory->createCreateOrUpdatePercentageCouponRequest(
                    (string) $productFamilyId,
                    CouponTestData::CODE_THREE
                )
            )
            ->getCoupon();
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

    public function loadProductFamilyFour(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_TWELVE)
            )
            ->getProductFamily();
    }

    public function loadProductFour(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_SEVEN, ProductTestData::HANDLE_SEVEN)
            )
            ->getProduct();
    }

    public function loadProductFamilyFive(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_THIRTEEN)
            )
            ->getProductFamily();
    }

    public function loadProductFive(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_EIGHT, ProductTestData::HANDLE_EIGHT)
            )
            ->getProduct();
    }

    public function loadProductFamilySix(): ProductFamily
    {
        return $this->client
            ->getProductFamiliesController()
            ->createProductFamily(
                $this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_FOURTEEN)
            )
            ->getProductFamily();
    }

    public function loadProductSix(int $productFamilyId): Product
    {
        return $this->client
            ->getProductsController()
            ->createProduct(
                $productFamilyId,
                $this->productRequestFactory->create(ProductTestData::NAME_NINE, ProductTestData::HANDLE_NINE)
            )
            ->getProduct();
    }
}
