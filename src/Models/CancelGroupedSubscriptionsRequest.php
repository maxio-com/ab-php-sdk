<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CancelGroupedSubscriptionsRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $chargeUnbilledUsage;

    /**
     * Returns Charge Unbilled Usage.
     */
    public function getChargeUnbilledUsage(): ?bool
    {
        return $this->chargeUnbilledUsage;
    }

    /**
     * Sets Charge Unbilled Usage.
     *
     * @maps charge_unbilled_usage
     */
    public function setChargeUnbilledUsage(?bool $chargeUnbilledUsage): void
    {
        $this->chargeUnbilledUsage = $chargeUnbilledUsage;
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
        if (isset($this->chargeUnbilledUsage)) {
            $json['charge_unbilled_usage'] = $this->chargeUnbilledUsage;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
