<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateSubscriptionBuilder;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\CreateSubscription;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestData\SubscriptionTestData;

final class TestSubscriptionRequestFactory
{
    public function create(int $customerId, int $productId, int $paymentProfileId): CreateSubscriptionRequest
    {
        return CreateSubscriptionRequestBuilder::init(
            $this->createCreateSubscription($customerId, $productId, $paymentProfileId)
        )
            ->build();
    }

    private function createCreateSubscription(
        int $customerId,
        int $productId,
        int $paymentProfileId
    ): CreateSubscription
    {
        return CreateSubscriptionBuilder::init()
            ->productId($productId)
            ->customerId($customerId)
            ->dunningCommunicationDelayEnabled(SubscriptionTestData::DUNNING_COMMUNICATION_DELAY_ENABLED)
            ->paymentCollectionMethod(SubscriptionTestData::PAYMENT_COLLECTION_METHOD)
            ->skipBillingManifestTaxes(SubscriptionTestData::SKIP_BILLING_MANIFEST_TAXES)
            ->paymentProfileId($paymentProfileId)
            ->build();
    }

    public function createCreateSubscriptionRequestWithNonExistingCustomer(
        int $productId,
        int $paymentProfileId
    ): CreateSubscriptionRequest
    {
        return CreateSubscriptionRequestBuilder::init(
            $this->createCreateSubscriptionWithNonExistingCustomer($productId, $paymentProfileId)
        )
            ->build();
    }

    private function createCreateSubscriptionWithNonExistingCustomer(
        int $productId,
        int $paymentProfileId
    ): CreateSubscription
    {
        return CreateSubscriptionBuilder::init()
            ->productId($productId)
            ->customerId(CustomerTestData::NON_EXISTING_CUSTOMER_ID)
            ->paymentProfileId($paymentProfileId)
            ->build();
    }
}
