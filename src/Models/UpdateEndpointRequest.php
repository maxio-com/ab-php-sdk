<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Used to Create or Update Endpoint
 */
class UpdateEndpointRequest implements \JsonSerializable
{
    /**
     * @var UpdateEndpoint
     */
    private $endpoint;

    /**
     * @param UpdateEndpoint $endpoint
     */
    public function __construct(UpdateEndpoint $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Returns Endpoint.
     * Used to Create or Update Endpoint
     */
    public function getEndpoint(): UpdateEndpoint
    {
        return $this->endpoint;
    }

    /**
     * Sets Endpoint.
     * Used to Create or Update Endpoint
     *
     * @required
     * @maps endpoint
     */
    public function setEndpoint(UpdateEndpoint $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['endpoint'] = $this->endpoint;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
