<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionPreview implements \JsonSerializable
{
    /**
     * @var BillingManifest|null
     */
    private $currentBillingManifest;

    /**
     * @var BillingManifest|null
     */
    private $nextBillingManifest;

    /**
     * Returns Current Billing Manifest.
     */
    public function getCurrentBillingManifest(): ?BillingManifest
    {
        return $this->currentBillingManifest;
    }

    /**
     * Sets Current Billing Manifest.
     *
     * @maps current_billing_manifest
     */
    public function setCurrentBillingManifest(?BillingManifest $currentBillingManifest): void
    {
        $this->currentBillingManifest = $currentBillingManifest;
    }

    /**
     * Returns Next Billing Manifest.
     */
    public function getNextBillingManifest(): ?BillingManifest
    {
        return $this->nextBillingManifest;
    }

    /**
     * Sets Next Billing Manifest.
     *
     * @maps next_billing_manifest
     */
    public function setNextBillingManifest(?BillingManifest $nextBillingManifest): void
    {
        $this->nextBillingManifest = $nextBillingManifest;
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
        if (isset($this->currentBillingManifest)) {
            $json['current_billing_manifest'] = $this->currentBillingManifest;
        }
        if (isset($this->nextBillingManifest)) {
            $json['next_billing_manifest']    = $this->nextBillingManifest;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
