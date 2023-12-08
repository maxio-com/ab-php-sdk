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
            $json['tax_rule_id']      = $this->taxRuleId;
        }
        if (isset($this->percentage)) {
            $json['percentage']       = $this->percentage;
        }
        if (isset($this->countryCode)) {
            $json['country_code']     = $this->countryCode;
        }
        if (isset($this->subdivisionCode)) {
            $json['subdivision_code'] = $this->subdivisionCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
