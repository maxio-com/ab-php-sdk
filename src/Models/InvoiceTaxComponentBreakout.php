<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceTaxComponentBreakout implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $taxRuleId;

    /**
     * @var string|null
     */
    private $percentage;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $subdivisionCode;

    /**
     * @var string|null
     */
    private $taxAmount;

    /**
     * @var string|null
     */
    private $taxableAmount;

    /**
     * @var string|null
     */
    private $taxExemptAmount;

    /**
     * @var string|null
     */
    private $nonTaxableAmount;

    /**
     * @var string|null
     */
    private $taxName;

    /**
     * @var string|null
     */
    private $taxType;

    /**
     * @var string|null
     */
    private $rateType;

    /**
     * @var int|null
     */
    private $taxAuthorityType;

    /**
     * @var string|null
     */
    private $stateAssignedNo;

    /**
     * @var string|null
     */
    private $taxSubType;

    /**
     * Returns Tax Rule Id.
     */
    public function getTaxRuleId(): ?int
    {
        return $this->taxRuleId;
    }

    /**
     * Sets Tax Rule Id.
     *
     * @maps tax_rule_id
     */
    public function setTaxRuleId(?int $taxRuleId): void
    {
        $this->taxRuleId = $taxRuleId;
    }

    /**
     * Returns Percentage.
     */
    public function getPercentage(): ?string
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     *
     * @maps percentage
     */
    public function setPercentage(?string $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Country Code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Subdivision Code.
     */
    public function getSubdivisionCode(): ?string
    {
        return $this->subdivisionCode;
    }

    /**
     * Sets Subdivision Code.
     *
     * @maps subdivision_code
     */
    public function setSubdivisionCode(?string $subdivisionCode): void
    {
        $this->subdivisionCode = $subdivisionCode;
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

    /**
     * Returns Non Taxable Amount.
     */
    public function getNonTaxableAmount(): ?string
    {
        return $this->nonTaxableAmount;
    }

    /**
     * Sets Non Taxable Amount.
     *
     * @maps non_taxable_amount
     */
    public function setNonTaxableAmount(?string $nonTaxableAmount): void
    {
        $this->nonTaxableAmount = $nonTaxableAmount;
    }

    /**
     * Returns Tax Name.
     */
    public function getTaxName(): ?string
    {
        return $this->taxName;
    }

    /**
     * Sets Tax Name.
     *
     * @maps tax_name
     */
    public function setTaxName(?string $taxName): void
    {
        $this->taxName = $taxName;
    }

    /**
     * Returns Tax Type.
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * Sets Tax Type.
     *
     * @maps tax_type
     */
    public function setTaxType(?string $taxType): void
    {
        $this->taxType = $taxType;
    }

    /**
     * Returns Rate Type.
     */
    public function getRateType(): ?string
    {
        return $this->rateType;
    }

    /**
     * Sets Rate Type.
     *
     * @maps rate_type
     */
    public function setRateType(?string $rateType): void
    {
        $this->rateType = $rateType;
    }

    /**
     * Returns Tax Authority Type.
     */
    public function getTaxAuthorityType(): ?int
    {
        return $this->taxAuthorityType;
    }

    /**
     * Sets Tax Authority Type.
     *
     * @maps tax_authority_type
     */
    public function setTaxAuthorityType(?int $taxAuthorityType): void
    {
        $this->taxAuthorityType = $taxAuthorityType;
    }

    /**
     * Returns State Assigned No.
     */
    public function getStateAssignedNo(): ?string
    {
        return $this->stateAssignedNo;
    }

    /**
     * Sets State Assigned No.
     *
     * @maps state_assigned_no
     */
    public function setStateAssignedNo(?string $stateAssignedNo): void
    {
        $this->stateAssignedNo = $stateAssignedNo;
    }

    /**
     * Returns Tax Sub Type.
     */
    public function getTaxSubType(): ?string
    {
        return $this->taxSubType;
    }

    /**
     * Sets Tax Sub Type.
     *
     * @maps tax_sub_type
     */
    public function setTaxSubType(?string $taxSubType): void
    {
        $this->taxSubType = $taxSubType;
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
        if (isset($this->taxRuleId)) {
            $json['tax_rule_id']        = $this->taxRuleId;
        }
        if (isset($this->percentage)) {
            $json['percentage']         = $this->percentage;
        }
        if (isset($this->countryCode)) {
            $json['country_code']       = $this->countryCode;
        }
        if (isset($this->subdivisionCode)) {
            $json['subdivision_code']   = $this->subdivisionCode;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']         = $this->taxAmount;
        }
        if (isset($this->taxableAmount)) {
            $json['taxable_amount']     = $this->taxableAmount;
        }
        if (isset($this->taxExemptAmount)) {
            $json['tax_exempt_amount']  = $this->taxExemptAmount;
        }
        if (isset($this->nonTaxableAmount)) {
            $json['non_taxable_amount'] = $this->nonTaxableAmount;
        }
        if (isset($this->taxName)) {
            $json['tax_name']           = $this->taxName;
        }
        if (isset($this->taxType)) {
            $json['tax_type']           = $this->taxType;
        }
        if (isset($this->rateType)) {
            $json['rate_type']          = $this->rateType;
        }
        if (isset($this->taxAuthorityType)) {
            $json['tax_authority_type'] = $this->taxAuthorityType;
        }
        if (isset($this->stateAssignedNo)) {
            $json['state_assigned_no']  = $this->stateAssignedNo;
        }
        if (isset($this->taxSubType)) {
            $json['tax_sub_type']       = $this->taxSubType;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
