<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentCostData implements \JsonSerializable
{
    /**
     * @var array
     */
    private $componentCodeId = [];

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $pricingScheme;

    /**
     * @var ComponentCostDataRateTier[]|null
     */
    private $tiers;

    /**
     * Returns Component Code Id.
     */
    public function getComponentCodeId(): ?int
    {
        if (count($this->componentCodeId) == 0) {
            return null;
        }
        return $this->componentCodeId['value'];
    }

    /**
     * Sets Component Code Id.
     *
     * @maps component_code_id
     */
    public function setComponentCodeId(?int $componentCodeId): void
    {
        $this->componentCodeId['value'] = $componentCodeId;
    }

    /**
     * Unsets Component Code Id.
     */
    public function unsetComponentCodeId(): void
    {
        $this->componentCodeId = [];
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Quantity.
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     *
     * @maps quantity
     */
    public function setQuantity(?string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

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
     * Returns Tiers.
     *
     * @return ComponentCostDataRateTier[]|null
     */
    public function getTiers(): ?array
    {
        return $this->tiers;
    }

    /**
     * Sets Tiers.
     *
     * @maps tiers
     *
     * @param ComponentCostDataRateTier[]|null $tiers
     */
    public function setTiers(?array $tiers): void
    {
        $this->tiers = $tiers;
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
        if (!empty($this->componentCodeId)) {
            $json['component_code_id'] = $this->componentCodeId['value'];
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']    = $this->pricePointId;
        }
        if (isset($this->productId)) {
            $json['product_id']        = $this->productId;
        }
        if (isset($this->quantity)) {
            $json['quantity']          = $this->quantity;
        }
        if (isset($this->amount)) {
            $json['amount']            = $this->amount;
        }
        if (isset($this->pricingScheme)) {
            $json['pricing_scheme']    = PricingScheme::checkValue($this->pricingScheme);
        }
        if (isset($this->tiers)) {
            $json['tiers']             = $this->tiers;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
