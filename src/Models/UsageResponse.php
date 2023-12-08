<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UsageResponse implements \JsonSerializable
{
    /**
     * @var Usage
     */
    private $usage;

    /**
     * @param Usage $usage
     */
    public function __construct(Usage $usage)
    {
        $this->usage = $usage;
    }

    /**
     * Returns Usage.
     */
    public function getUsage(): Usage
    {
        return $this->usage;
    }

    /**
     * Sets Usage.
     *
     * @required
     * @maps usage
     */
    public function setUsage(Usage $usage): void
    {
        $this->usage = $usage;
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
        $json['usage'] = $this->usage;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
