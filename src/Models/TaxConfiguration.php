<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class TaxConfiguration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $kind = TaxConfigurationKind::CUSTOM;

    /**
     * @var string|null
     */
    private $destinationAddress;

    /**
     * @var bool|null
     */
    private $fullyConfigured = false;

    /**
     * Returns Kind.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @maps kind
     * @factory \AdvancedBillingLib\Models\TaxConfigurationKind::checkValue
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Destination Address.
     */
    public function getDestinationAddress(): ?string
    {
        return $this->destinationAddress;
    }

    /**
     * Sets Destination Address.
     *
     * @maps destination_address
     * @factory \AdvancedBillingLib\Models\TaxDestinationAddress::checkValue
     */
    public function setDestinationAddress(?string $destinationAddress): void
    {
        $this->destinationAddress = $destinationAddress;
    }

    /**
     * Returns Fully Configured.
     * Returns `true` when Chargify has been properly configured to charge tax using the specified tax
     * system. More details about taxes: https://maxio-chargify.zendesk.com/hc/en-us/articles/5405488905869-
     * Taxes-Introduction
     */
    public function getFullyConfigured(): ?bool
    {
        return $this->fullyConfigured;
    }

    /**
     * Sets Fully Configured.
     * Returns `true` when Chargify has been properly configured to charge tax using the specified tax
     * system. More details about taxes: https://maxio-chargify.zendesk.com/hc/en-us/articles/5405488905869-
     * Taxes-Introduction
     *
     * @maps fully_configured
     */
    public function setFullyConfigured(?bool $fullyConfigured): void
    {
        $this->fullyConfigured = $fullyConfigured;
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
        if (isset($this->kind)) {
            $json['kind']                = TaxConfigurationKind::checkValue($this->kind);
        }
        if (isset($this->destinationAddress)) {
            $json['destination_address'] = TaxDestinationAddress::checkValue($this->destinationAddress);
        }
        if (isset($this->fullyConfigured)) {
            $json['fully_configured']    = $this->fullyConfigured;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
