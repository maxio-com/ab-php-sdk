<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ActivateSubscriptionRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $revertOnFailure = [];

    /**
     * Returns Revert on Failure.
     * You may choose how to handle the activation failure. `true` means do not change the subscription’s
     * state and billing period. `false`  means to continue through with the activation and enter an end of
     * life state. If this parameter is omitted or `null` is passed it will default to value set in the
     * site settings (default: `true`)
     */
    public function getRevertOnFailure(): ?bool
    {
        if (count($this->revertOnFailure) == 0) {
            return null;
        }
        return $this->revertOnFailure['value'];
    }

    /**
     * Sets Revert on Failure.
     * You may choose how to handle the activation failure. `true` means do not change the subscription’s
     * state and billing period. `false`  means to continue through with the activation and enter an end of
     * life state. If this parameter is omitted or `null` is passed it will default to value set in the
     * site settings (default: `true`)
     *
     * @maps revert_on_failure
     */
    public function setRevertOnFailure(?bool $revertOnFailure): void
    {
        $this->revertOnFailure['value'] = $revertOnFailure;
    }

    /**
     * Unsets Revert on Failure.
     * You may choose how to handle the activation failure. `true` means do not change the subscription’s
     * state and billing period. `false`  means to continue through with the activation and enter an end of
     * life state. If this parameter is omitted or `null` is passed it will default to value set in the
     * site settings (default: `true`)
     */
    public function unsetRevertOnFailure(): void
    {
        $this->revertOnFailure = [];
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
        if (!empty($this->revertOnFailure)) {
            $json['revert_on_failure'] = $this->revertOnFailure['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
