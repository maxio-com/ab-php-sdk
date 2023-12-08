<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BulkUpdateSegmentsItem implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pricingScheme;

    /**
     * @var CreateOrUpdateSegmentPrice[]
     */
    private $prices;

    /**
     * @param int $id
     * @param string $pricingScheme
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public function __construct(int $id, string $pricingScheme, array $prices)
    {
        $this->id = $id;
        $this->pricingScheme = $pricingScheme;
        $this->prices = $prices;
    }

    /**
     * Returns Id.
     * The ID of the segment you want to update.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The ID of the segment you want to update.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
     */
    public function getPricingScheme(): string
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * The identifier for the pricing scheme. See [Product Components](https://help.chargify.
     * com/products/product-components.html) for an overview of pricing schemes.
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
     *
     * @return CreateOrUpdateSegmentPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Sets Prices.
     *
     * @required
     * @maps prices
     *
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
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
        $json['id']             = $this->id;
        $json['pricing_scheme'] = PricingScheme::checkValue($this->pricingScheme);
        $json['prices']         = $this->prices;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
