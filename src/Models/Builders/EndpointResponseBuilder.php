<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Endpoint;
use AdvancedBillingLib\Models\EndpointResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model EndpointResponse
 *
 * @see EndpointResponse
 */
class EndpointResponseBuilder
{
    /**
     * @var EndpointResponse
     */
    private $instance;

    private function __construct(EndpointResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Endpoint Response Builder object.
     */
    public static function init(): self
    {
        return new self(new EndpointResponse());
    }

    /**
     * Sets endpoint field.
     *
     * @param Endpoint|null $value
     */
    public function endpoint(?Endpoint $value): self
    {
        $this->instance->setEndpoint($value);
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
     * Initializes a new Endpoint Response object.
     */
    public function build(): EndpointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
