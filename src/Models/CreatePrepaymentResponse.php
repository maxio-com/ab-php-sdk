<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreatePrepaymentResponse implements \JsonSerializable
{
    /**
     * @var CreatedPrepayment
     */
    private $prepayment;

    /**
     * @param CreatedPrepayment $prepayment
     */
    public function __construct(CreatedPrepayment $prepayment)
    {
        $this->prepayment = $prepayment;
    }

    /**
     * Returns Prepayment.
     */
    public function getPrepayment(): CreatedPrepayment
    {
        return $this->prepayment;
    }

    /**
     * Sets Prepayment.
     *
     * @required
     * @maps prepayment
     */
    public function setPrepayment(CreatedPrepayment $prepayment): void
    {
        $this->prepayment = $prepayment;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['prepayment'] = $this->prepayment;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
