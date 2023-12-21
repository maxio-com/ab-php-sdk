<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestFactory\CustomerTestData;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class SubscriptionsControllerTestData
{
    private const SUBSCRIPTION_ID = 314179;

    public function __construct(
        private TestSubscriptionFactory $subscriptionFactory,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory
    ) {
    }

    public function getExpectedSubscription(): Subscription
    {
        return $this->subscriptionFactory->createWithDefaultValuesAndCustomId($this->getSubscriptionId());
    }

    public function getSubscriptionId(): int
    {
        return self::SUBSCRIPTION_ID;
    }

    public function getCreateSubscriptionRequest(): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->createCreateSubscriptionRequestWithDefaultValues();
    }

    public function getCreateSubscriptionRequestWithNonExistingCustomer(): CreateSubscriptionRequest
    {
        return $this->subscriptionRequestFactory->createCreateSubscriptionRequestWithNonExistingCustomer();
    }

    public function getCustomerId(): int
    {
        return CustomerTestData::CUSTOMER_ID;
    }
}
