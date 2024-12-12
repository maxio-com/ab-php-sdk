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

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
