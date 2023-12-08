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
 * These values are only applicable to subscriptions using calendar billing
 */
class ReactivationBilling implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $reactivationCharge = ReactivationCharge::PRORATED;

    /**
     * Returns Reactivation Charge.
     * You may choose how to handle the reactivation charge for that subscription: 1) `prorated` A prorated
     * charge for the product price will be attempted for to complete the period 2) `immediate` A full-
     * price charge for the product price will be attempted immediately 3) `delayed` A full-price charge
     * for the product price will be attempted at the next renewal
     */
    public function getReactivationCharge(): ?string
    {
        return $this->reactivationCharge;
    }

    /**
     * Sets Reactivation Charge.
     * You may choose how to handle the reactivation charge for that subscription: 1) `prorated` A prorated
     * charge for the product price will be attempted for to complete the period 2) `immediate` A full-
     * price charge for the product price will be attempted immediately 3) `delayed` A full-price charge
     * for the product price will be attempted at the next renewal
     *
     * @maps reactivation_charge
     * @factory \AdvancedBillingLib\Models\ReactivationCharge::checkValue
     */
    public function setReactivationCharge(?string $reactivationCharge): void
    {
        $this->reactivationCharge = $reactivationCharge;
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
        if (isset($this->reactivationCharge)) {
            $json['reactivation_charge'] = ReactivationCharge::checkValue($this->reactivationCharge);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
