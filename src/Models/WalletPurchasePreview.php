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
 * A price quote for a purchase, without charging anything.
 */
class WalletPurchasePreview implements \JsonSerializable
{
    /**
     * @var int
     */
    private $pricePointId;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string
     */
    private $amount;

    /**
     * @param int $pricePointId
     * @param string $currency
     * @param string $quantity
     * @param string $amount
     */
    public function __construct(int $pricePointId, string $currency, string $quantity, string $amount)
    {
        $this->pricePointId = $pricePointId;
        $this->currency = $currency;
        $this->quantity = $quantity;
        $this->amount = $amount;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @required
     * @maps price_point_id
     */
    public function setPricePointId(int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Currency.
     * The three-letter currency code the `amount` is denominated in, matching the subscription's currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * The three-letter currency code the `amount` is denominated in, matching the subscription's currency.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Quantity.
     * The number of units the quote is for, as a decimal string.
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The number of units the quote is for, as a decimal string.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Amount.
     * The price for `quantity` units at this price point, as a decimal string.
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The price for `quantity` units at this price point, as a decimal string.
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Converts the WalletPurchasePreview object to a human-readable string representation.
     *
     * @return string The string representation of the WalletPurchasePreview object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletPurchasePreview',
            [
                'pricePointId' => $this->pricePointId,
                'currency' => $this->currency,
                'quantity' => $this->quantity,
                'amount' => $this->amount,
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
        $json['price_point_id'] = $this->pricePointId;
        $json['currency']       = $this->currency;
        $json['quantity']       = $this->quantity;
        $json['amount']         = $this->amount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
