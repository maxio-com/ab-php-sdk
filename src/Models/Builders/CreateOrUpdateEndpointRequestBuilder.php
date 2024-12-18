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
     * Initializes a new Create Or Update Endpoint Request Builder object.
     *
     * @param CreateOrUpdateEndpoint $endpoint
     */
    public static function init(CreateOrUpdateEndpoint $endpoint): self
    {
        return new self(new CreateOrUpdateEndpointRequest($endpoint));
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
     * Initializes a new Create Or Update Endpoint Request object.
     */
    public function build(): CreateOrUpdateEndpointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
