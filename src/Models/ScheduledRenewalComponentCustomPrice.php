<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * Custom pricing for a component within a scheduled renewal.
 */
class ScheduledRenewalComponentCustomPrice implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var Price[]
     */
    private $prices;

    /**
     * @param string $pricingScheme
     * @param Price[] $prices
     */
    public function __construct(string $pricingScheme, array $prices)
    {
        $this->pricingScheme = $pricingScheme;
        $this->prices = $prices;
    }

    /**
     * Returns Tax Included.
     * Whether or not the price point includes tax
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * Whether or not the price point includes tax
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Pricing Scheme.
     * Omit for On/Off components
     */
    public function getPricingScheme(): string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * Omit for On/Off components
     *
     * @required
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     * On/off components only need one price bracket starting at 1.
     *
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     * On/off components only need one price bracket starting at 1.
     *
     * @required
     * @maps prices
     *
     * @param Price[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Converts the ScheduledRenewalComponentCustomPrice object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalComponentCustomPrice object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalComponentCustomPrice',
            [
                'taxIncluded' => $this->taxIncluded,
                'pricingScheme' => $this->pricingScheme,
                'prices' => $this->prices,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->taxIncluded)) {
            $json['tax_included'] = $this->taxIncluded;
        }
        $json['pricing_scheme']   = PricingScheme::checkValue($this->pricingScheme);
        $json['prices']           = $this->prices;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
