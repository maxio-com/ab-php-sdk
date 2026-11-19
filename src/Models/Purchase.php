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

class Purchase implements \JsonSerializable
{
    /**
     * @var string|int
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @param string|int $quantity
     */
    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Quantity.
     * The number of wallet units to purchase, as a decimal string with at most 8 fractional digits. Send
     * fractional values as strings: a JSON number with a decimal point is rejected with `422`, because a
     * double-precision float may already have lost precision before the request arrives.
     *
     * @return string|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The number of wallet units to purchase, as a decimal string with at most 8 fractional digits. Send
     * fractional values as strings: a JSON number with a decimal point is rejected with `422`, because a
     * double-precision float may already have lost precision before the request arrives.
     *
     * @required
     * @maps quantity
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Price Point Id.
     * The price point to purchase at. Must belong to the wallet's billing product. Defaults to the
     * `price_point_id` set on the wallet.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * The price point to purchase at. Must belong to the wallet's billing product. Defaults to the
     * `price_point_id` set on the wallet.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Memo.
     * (Optional) A note recorded on the resulting grant's ledger row.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     * (Optional) A note recorded on the resulting grant's ledger row.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * (Optional) A note recorded on the resulting grant's ledger row.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Converts the Purchase object to a human-readable string representation.
     *
     * @return string The string representation of the Purchase object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Purchase',
            [
                'quantity' => $this->quantity,
                'pricePointId' => $this->pricePointId,
                'memo' => $this->getMemo(),
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
        $json['quantity']           = ApiHelper::getJsonHelper()->verifyTypes($this->quantity, 'oneOf(string,int)');
        if (isset($this->pricePointId)) {
            $json['price_point_id'] = $this->pricePointId;
        }
        if (!empty($this->memo)) {
            $json['memo']           = $this->memo['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
