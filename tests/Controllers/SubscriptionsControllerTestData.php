<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;

final class SubscriptionsControllerTestData
{
    private const SUBSCRIPTION_ID = 314179;

    public function __construct(private TestSubscriptionFactory $subscriptionFactory)
    {
    }

    public function getExpectedSubscription(): Subscription
    {
        return $this->subscriptionFactory->createWithDefaultValuesAndCustomId($this->getSubscriptionId());
    }

    public function getSubscriptionId(): int
    {
        return self::SUBSCRIPTION_ID;
    }
}
