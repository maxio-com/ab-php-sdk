<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateEndpoint;
use AdvancedBillingLib\Models\UpdateEndpointRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateEndpointRequest
 *
 * @see UpdateEndpointRequest
 */
class UpdateEndpointRequestBuilder
{
    /**
     * @var UpdateEndpointRequest
     */
    private $instance;

    private function __construct(UpdateEndpointRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update endpoint request Builder object.
     */
    public static function init(UpdateEndpoint $endpoint): self
    {
        return new self(new UpdateEndpointRequest($endpoint));
    }

    /**
     * Initializes a new update endpoint request object.
     */
    public function build(): UpdateEndpointRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
