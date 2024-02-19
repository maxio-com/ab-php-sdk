<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateEndpoint;
use AdvancedBillingLib\Models\CreateOrUpdateEndpointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateEndpointRequest
 *
 * @see CreateOrUpdateEndpointRequest
 */
class CreateOrUpdateEndpointRequestBuilder
{
    /**
     * @var CreateOrUpdateEndpointRequest
     */
    private $instance;

    private function __construct(CreateOrUpdateEndpointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update endpoint request Builder object.
     */
    public static function init(CreateOrUpdateEndpoint $endpoint): self
    {
        return new self(new CreateOrUpdateEndpointRequest($endpoint));
    }

    /**
     * Initializes a new create or update endpoint request object.
     */
    public function build(): CreateOrUpdateEndpointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
