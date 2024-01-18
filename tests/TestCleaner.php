<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Exceptions\ApiException;

final class TestCleaner
{
    public function __construct(private AdvancedBillingClient $client)
    {
    }

    public function removeCustomerById(int $customerId): void
    {
        try {
            $this->client->getCustomersController()->deleteCustomer($customerId);
        } catch (ApiException) {
            sleep(1);
            $this->removeCustomerById($customerId);
        }
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
        $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile($paymentProfileId);
    }

    public function removeSubscriptionPaymentProfileById(int $subscriptionId, int $paymentProfileId): void
    {
        $this->client->getPaymentProfilesController()->deleteSubscriptionsPaymentProfile(
            $subscriptionId,
            $paymentProfileId
        );
    }

    public function removeMetafield(string $resourceType, string $name): void
    {
        $this->client
            ->getCustomFieldsController()
            ->deleteMetafield($resourceType, $name);
    }

    public function removeMetadata(string $resourceType, int $resourceId, string $metadataName): void
    {
        $this->client
            ->getCustomFieldsController()
            ->deleteMetadata($resourceType, (string) $resourceId, $metadataName);
    }
}
