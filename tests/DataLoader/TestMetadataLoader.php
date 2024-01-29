<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Metadata;
use AdvancedBillingLib\Models\ResourceType;
use AdvancedBillingLib\Tests\TestFactory\TestCustomFieldsRequestFactory;

final class TestMetadataLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestCustomFieldsRequestFactory $customFieldsRequestFactory
    )
    {
    }

    /**
     * @return array<int, Metadata>
     */
    public function loadMetadataForSubscription(int $subscriptionId, string $name, string $value): array
    {
        return $this->client
            ->getCustomFieldsController()
            ->createMetadata(
                ResourceType::SUBSCRIPTIONS,
                $subscriptionId,
                $this->customFieldsRequestFactory->createCreateMetadataRequest($name, $value)
            );
    }
}
