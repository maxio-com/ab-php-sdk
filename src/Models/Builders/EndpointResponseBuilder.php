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
     * Initializes a new endpoint response Builder object.
     */
    public static function init(): self
    {
        return new self(new EndpointResponse());
    }

    /**
     * Sets endpoint field.
     */
    public function endpoint(?Endpoint $value): self
    {
        $this->instance->setEndpoint($value);
        return $this;
    }

    /**
     * Initializes a new endpoint response object.
     */
    public function build(): EndpointResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
