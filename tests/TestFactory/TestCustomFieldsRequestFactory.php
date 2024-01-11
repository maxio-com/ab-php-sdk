<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateMetadataBuilder;
use AdvancedBillingLib\Models\Builders\CreateMetadataRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateMetafieldBuilder;
use AdvancedBillingLib\Models\Builders\CreateMetafieldsRequestBuilder;
use AdvancedBillingLib\Models\CreateMetadata;
use AdvancedBillingLib\Models\CreateMetadataRequest;
use AdvancedBillingLib\Models\CreateMetafield;
use AdvancedBillingLib\Models\CreateMetafieldsRequest;

final class TestCustomFieldsRequestFactory
{
    /**
     * @param array<int, int|string> $options
     */
    public function createCreateMetaFieldWithOptionsRequest(
        string $name,
        string $inputType,
        array $options
    ): CreateMetafieldsRequest
    {
        $request = $this->createCreateMetaFieldRequest($name, $inputType);

        $request->getMetafields()->setEnum($options);

        return $request;
    }

    public function createCreateMetaFieldRequest(string $name, string $inputType): CreateMetafieldsRequest
    {
        return CreateMetafieldsRequestBuilder::init($this->createCreateMetafield($name, $inputType))
            ->build();
    }

    private function createCreateMetaField(string $name, string $inputType): CreateMetafield
    {
        return CreateMetafieldBuilder::init()
            ->id(123)
            ->name($name)
            ->inputType($inputType)
            ->build();
    }

    public function createCreateMetadataRequest(string $name, string $value): CreateMetadataRequest
    {
        return CreateMetadataRequestBuilder::init([$this->createCreateMetaData($name, $value)])
            ->build();
    }

    private function createCreateMetaData(string $name, string $value): CreateMetadata
    {
        return CreateMetadataBuilder::init()
            ->name($name)
            ->value($value)
            ->build();
    }
}
