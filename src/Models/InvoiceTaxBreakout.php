<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceTaxBreakout implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $taxableAmount;

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var string|null
     */
    private $taxExemptAmount;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Taxable Amount.
     */
    public function getTaxableAmount(): ?string
    {
        return $this->taxableAmount;
    }

    /**
     * Sets Taxable Amount.
     *
     * @maps taxable_amount
     */
    public function setTaxableAmount(?string $taxableAmount): void
    {
        $this->taxableAmount = $taxableAmount;
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Tax Exempt Amount.
     */
    public function getTaxExemptAmount(): ?string
    {
        return $this->taxExemptAmount;
    }

    /**
     * Sets Tax Exempt Amount.
     *
     * @maps tax_exempt_amount
     */
    public function setTaxExemptAmount(?string $taxExemptAmount): void
    {
        $this->taxExemptAmount = $taxExemptAmount;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->uid)) {
            $json['uid']               = $this->uid;
        }
        if (isset($this->taxableAmount)) {
            $json['taxable_amount']    = $this->taxableAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']        = $this->taxAmount;
        }
        if (isset($this->taxExemptAmount)) {
            $json['tax_exempt_amount'] = $this->taxExemptAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
