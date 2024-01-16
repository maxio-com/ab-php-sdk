<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionComponentBuilder;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreateSubscriptionComponent;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class TestSubscriptionsLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory
    )
    {
    }

    public function load(int $customerId, int $productId, int $paymentProfileId): Subscription
    {
        return $this->client
            ->getSubscriptionsController()
            ->createSubscription($this->subscriptionRequestFactory->create($customerId, $productId, $paymentProfileId))
            ->getSubscription();
    }

    /**
     * @param array<int, Component> $components
     */
    public function loadWithComponents(int $customerId, int $productId, int $paymentProfileId, array $components)
    {
        return $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->subscriptionRequestFactory->createWithComponents(
                    $customerId,
                    $productId,
                    $paymentProfileId,
                    $this->createCreateSubscriptionComponent($components)
                )
            )
            ->getSubscription();
    }

    /**
     * @param array<int, Component> $components
     * @return array<int, CreateSubscriptionComponent>
     */
    private function createCreateSubscriptionComponent(array $components): array
    {
        return array_map(
            static fn(Component $component): CreateSubscriptionComponent => CreateSubscriptionComponentBuilder::init()
                ->componentId($component->getId())
                ->allocatedQuantity(1)
                ->pricePointId($component->getDefaultPricePointId())
                ->build(),
            $components
        );
    }

    /**
     * @param array<int, Coupon> $coupons
     */
    public function loadWithCoupons(
        int $customerId,
        int $productId,
        int $paymentProfileId,
        array $coupons
    ): Subscription
    {
        return $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->subscriptionRequestFactory->createWithCoupons(
                    $customerId,
                    $productId,
                    $paymentProfileId,
                    $coupons
                )
            )
            ->getSubscription();
    }
}
