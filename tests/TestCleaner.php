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
        try {
            $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile($paymentProfileId);
        } catch (ApiException) {
            // Payment profile might already be deleted or in use, ignore
        }
    }

    public function removeSubscriptionPaymentProfileById(int $subscriptionId, int $paymentProfileId): void
    {
        try {
            $this->client->getPaymentProfilesController()->deleteSubscriptionsPaymentProfile(
                $subscriptionId,
                $paymentProfileId
            );
        } catch (ApiException) {
            // Payment profile might already be deleted, try as unused profile
            try {
                $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile($paymentProfileId);
            } catch (ApiException) {
                // Ignore if still fails
            }
        }
    }
    
    public function removeAllPaymentProfilesForCustomer(int $customerId): void
    {
        try {
            $paymentProfiles = $this->client->getPaymentProfilesController()->listPaymentProfiles([
                'customer_id' => $customerId
            ]);
            
            foreach ($paymentProfiles as $profileResponse) {
                $profile = $profileResponse->getPaymentProfile();
                try {
                    $this->client->getPaymentProfilesController()->deleteUnusedPaymentProfile($profile->getId());
                } catch (ApiException) {
                    // Ignore if deletion fails
                }
            }
        } catch (ApiException) {
            // Ignore if listing fails
        }
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
            ->deleteMetadata($resourceType, $resourceId, $metadataName);
    }
}
