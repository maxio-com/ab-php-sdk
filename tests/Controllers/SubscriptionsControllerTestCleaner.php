<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;

final class SubscriptionsControllerTestCleaner
{
    public function __construct(private AdvancedBillingClient $client)
    {
    }

    public function removeSubscriptionById(int $id, int $customerId): void
    {
        $this->client->getSubscriptionsController()->purgeSubscription($id, $customerId);
    }
}
