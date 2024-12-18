<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateMetadata;
use AdvancedBillingLib\Models\UpdateMetadataRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateMetadataRequest
 *
 * @see UpdateMetadataRequest
 */
class UpdateMetadataRequestBuilder
{
    /**
     * @var UpdateMetadataRequest
     */
    private $instance;

    private function __construct(UpdateMetadataRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Metadata Request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateMetadataRequest());
    }

    /**
     * Sets metadata field.
     *
     * @param UpdateMetadata|null $value
     */
    public function metadata(?UpdateMetadata $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Update Metadata Request object.
     */
    public function build(): UpdateMetadataRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
