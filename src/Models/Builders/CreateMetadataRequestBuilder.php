<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMetadataRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMetadataRequest
 *
 * @see CreateMetadataRequest
 */
class CreateMetadataRequestBuilder
{
    /**
     * @var CreateMetadataRequest
     */
    private $instance;

    private function __construct(CreateMetadataRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create metadata request Builder object.
     */
    public static function init(array $metadata): self
    {
        return new self(new CreateMetadataRequest($metadata));
    }

    /**
     * Initializes a new create metadata request object.
     */
    public function build(): CreateMetadataRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
