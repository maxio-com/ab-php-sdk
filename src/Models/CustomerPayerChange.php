<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerPayerChange implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $before;

    /**
     * @var array|null
     */
    private $after;

    /**
     * Returns Before.
     */
    public function getBefore(): ?array
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @maps before
     */
    public function setBefore(?array $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     */
    public function getAfter(): ?array
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @maps after
     */
    public function setAfter(?array $after): void
    {
        $this->after = $after;
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
        if (isset($this->before)) {
            $json['before'] = $this->before;
        }
        if (isset($this->after)) {
            $json['after']  = $this->after;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
