<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreatePrepaidComponent implements \JsonSerializable
{
    /**
     * @var PrepaidUsageComponent
     */
    private $prepaidUsageComponent;

    /**
     * @param PrepaidUsageComponent $prepaidUsageComponent
     */
    public function __construct(PrepaidUsageComponent $prepaidUsageComponent)
    {
        $this->prepaidUsageComponent = $prepaidUsageComponent;
    }

    /**
     * Returns Prepaid Usage Component.
     */
    public function getPrepaidUsageComponent(): PrepaidUsageComponent
    {
        return $this->prepaidUsageComponent;
    }

    /**
     * Sets Prepaid Usage Component.
     *
     * @required
     * @maps prepaid_usage_component
     */
    public function setPrepaidUsageComponent(PrepaidUsageComponent $prepaidUsageComponent): void
    {
        $this->prepaidUsageComponent = $prepaidUsageComponent;
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
        $json['prepaid_usage_component'] = $this->prepaidUsageComponent;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
