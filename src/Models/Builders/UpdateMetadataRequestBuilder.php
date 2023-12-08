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
     * Initializes a new update metadata request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateMetadataRequest());
    }

    /**
     * Sets metadata field.
     */
    public function metadata(?UpdateMetadata $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Initializes a new update metadata request object.
     */
    public function build(): UpdateMetadataRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
