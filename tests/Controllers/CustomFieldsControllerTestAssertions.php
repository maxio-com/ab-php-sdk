<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Metadata;
use AdvancedBillingLib\Models\Metafield;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\TestData\CustomFieldsTestData;

final class CustomFieldsControllerTestAssertions
{
    public function __construct(private CustomFieldsControllerTest $testCase)
    {
    }

    /**
     * @param array<int, Metafield> $response
     */
    public function assertTextMetaFieldCreated(array $response, string $name): void
    {
        $this->testCase::assertCount(1, $response);
        $metaField = $response[0];

        $this->testCase::assertEquals(CustomFieldsTestData::INPUT_TYPE_TEXT, $metaField->getInputType());
        $this->testCase::assertEquals($name, $metaField->getName());
    }

    /**
     * @param array<int, Metafield> $response
     * @param array<int, string|int> $options
     */
    public function assertDropdownMetaFieldCreated(array $response, string $name, array $options): void
    {
        $this->testCase::assertCount(1, $response);
        $metaField = $response[0];

        $this->testCase::assertEquals(CustomFieldsTestData::INPUT_TYPE_DROPDOWN, $metaField->getInputType());
        $this->testCase::assertEquals($name, $metaField->getName());
        $this->testCase::assertEquals($options, $metaField->getEnum());
    }

    /**
     * @param array<int, Metafield> $response
     * @param array<int, string|int> $options
     */
    public function assertRadioMetaFieldCreated(array $response, string $name, array $options): void
    {
        $this->testCase::assertCount(1, $response);
        $metaField = $response[0];

        $this->testCase::assertEquals(CustomFieldsTestData::INPUT_TYPE_RADIO, $metaField->getInputType());
        $this->testCase::assertEquals($name, $metaField->getName());
        $this->testCase::assertEquals($options, $metaField->getEnum());
    }

    /**
     * @param array<int, Metadata> $response
     */
    public function assertSubscriptionMetadataCreated(array $response, Subscription $subscription): void
    {
        $this->testCase::assertCount(1, $response);
        $metadata = $response[0];

        $this->testCase::assertEquals($subscription->getId(), $metadata->getResourceId());
    }

    /**
     * @param array<int, Metadata> $response
     */
    public function assertListHasSubscriptionMetadata(array $response, int $subscriptionId): void
    {
        $this->testCase::assertNotEmpty($response);
        $this->testCase::assertCount(1, $response);
        $metadata = $response[0];

        $this->testCase::assertEquals($subscriptionId, $metadata->getResourceId());
        $this->testCase::assertEquals(CustomFieldsTestData::METADATA_VALUE, $metadata->getValue());
        $this->testCase::assertEquals(CustomFieldsTestData::METADATA_NAME, $metadata->getName());
    }

    /**
     * @param array<int, Metadata> $response
     */
    public function assertCustomerMetadataCreated(array $response, int $customerId): void
    {
        $this->testCase::assertNotEmpty($response);
        $this->testCase::assertCount(1, $response);
        $metadata = $response[0];

        $this->testCase::assertEquals($customerId, $metadata->getResourceId());
        $this->testCase::assertEquals(CustomFieldsTestData::METADATA_VALUE, $metadata->getValue());
        $this->testCase::assertEquals(CustomFieldsTestData::METADATA_NAME, $metadata->getName());
    }
}
