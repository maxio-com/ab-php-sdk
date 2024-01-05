<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
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
}
