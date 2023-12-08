<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Proration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $preservePeriod;

    /**
     * Returns Preserve Period.
     * The alternative to sending preserve_period as a direct attribute to migration
     */
    public function getPreservePeriod(): ?bool
    {
        return $this->preservePeriod;
    }

    /**
     * Sets Preserve Period.
     * The alternative to sending preserve_period as a direct attribute to migration
     *
     * @maps preserve_period
     */
    public function setPreservePeriod(?bool $preservePeriod): void
    {
        $this->preservePeriod = $preservePeriod;
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
        if (isset($this->preservePeriod)) {
            $json['preserve_period'] = $this->preservePeriod;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
