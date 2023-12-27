<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests;

use AdvancedBillingLib\AdvancedBillingClient;

final class TestCleaner
{
    public function __construct(private AdvancedBillingClient $client)
    {
    }

    public function removeCustomerById(int $customerId): void
    {
        $this->client->getCustomersController()->deleteCustomer($customerId);
    }
}
