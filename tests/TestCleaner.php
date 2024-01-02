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

    public function archiveProductById(int $productId): void
    {
        $this->client->getProductsController()->archiveProduct($productId);
    }

    public function removeSubscriptionById(int $subscriptionId, int $customerId): void
    {
        $this->client->getSubscriptionsController()->purgeSubscription($subscriptionId, $customerId);
    }

    public function removeUnusedPaymentProfileById(int $paymentProfileId): void
    {
        $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile((string) $paymentProfileId);
    }

    public function removeSubscriptionPaymentProfileById(int $subscriptionId, int $paymentProfileId): void
    {
        $this->client->getPaymentProfilesController()->deleteSubscriptionsPaymentProfile(
            $subscriptionId,
            (string) $paymentProfileId
        );
    }
}