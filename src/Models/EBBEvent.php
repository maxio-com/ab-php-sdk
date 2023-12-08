<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class EBBEvent implements \JsonSerializable
{
    /**
     * @var ChargifyEBB|null
     */
    private $chargify;

    /**
     * Returns Chargify.
     */
    public function getChargify(): ?ChargifyEBB
    {
        return $this->chargify;
    }

    /**
     * Sets Chargify.
     *
     * @maps chargify
     */
    public function setChargify(?ChargifyEBB $chargify): void
    {
        $this->chargify = $chargify;
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
        if (isset($this->chargify)) {
            $json['chargify'] = $this->chargify;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
