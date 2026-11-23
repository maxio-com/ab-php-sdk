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
 * Hybrid Pricing only. Changes the secondary pricing model of an existing hybrid price point. Send
 * `pricing_scheme` (or the top-level `secondary_pricing_scheme`) every time you send this block; a
 * block without a scheme returns `422`. Brackets sent without an `id` are added to the existing ones
 * rather than replacing them, so to change a bracket set, update existing brackets by `id` and remove
 * the ones you no longer want with `_destroy: true`. See [Hybrid Pricing](page:introduction/basic-
 * concepts/hybrid-pricing).
 */
class UpdateSecondaryPricing implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var UpdatePrice[]|null
     */
    private $prices;

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): ?string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     *
     * @maps pricing_scheme
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Prices.
     *
     * @return UpdatePrice[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     *
     * @maps prices
     *
     * @param UpdatePrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * Converts the UpdateSecondaryPricing object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateSecondaryPricing object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateSecondaryPricing',
            [
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
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme'] = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->prices)) {
            $json['prices']         = $this->prices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
