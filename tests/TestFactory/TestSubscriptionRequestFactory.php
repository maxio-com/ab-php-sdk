<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateSubscriptionBuilder;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\CreateSubscription;
use AdvancedBillingLib\Models\CreateSubscriptionComponent;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Tests\TestData\SubscriptionTestData;

final class TestSubscriptionRequestFactory
{
    /**
     * @param array<int, CreateSubscriptionComponent> $components
     */
    public function createWithComponents(
        int $customerId,
        int $productId,
        int $paymentProfileId,
        array $components
    ): CreateSubscriptionRequest
    {
        $request = $this->create($customerId, $productId, $paymentProfileId);

        $request->getSubscription()
            ->setComponents($components);

        return $request;
    }

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
}
