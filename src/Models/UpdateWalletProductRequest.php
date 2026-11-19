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
 * Only `name`, `description`, `taxable`, `tax_code`, `accounting_code`, and `item_category` are
 * mutable. `unit_name`, `handle`, `price_point`, and `price_points` are not accepted here: the request
 * still returns `200`, but those fields are silently ignored and nothing about them changes. `handle`
 * stays fixed because it's the Wallet Product's only stable identifier on a surface with no product
 * family in the path; `unit_name` stays fixed because a wallet's behavior snapshots it into the
 * wallet's own `unit` field and never re-derives it.
 */
class UpdateWalletProductRequest implements \JsonSerializable
{
    /**
     * @var WalletProduct1
     */
    private $walletProduct;

    /**
     * @param WalletProduct1 $walletProduct
     */
    public function __construct(WalletProduct1 $walletProduct)
    {
        $this->walletProduct = $walletProduct;
    }

    /**
     * Returns Wallet Product.
     */
    public function getWalletProduct(): WalletProduct1
    {
        return $this->walletProduct;
    }

    /**
     * Sets Wallet Product.
     *
     * @required
     * @maps wallet_product
     */
    public function setWalletProduct(WalletProduct1 $walletProduct): void
    {
        $this->walletProduct = $walletProduct;
    }

    /**
     * Converts the UpdateWalletProductRequest object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateWalletProductRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateWalletProductRequest',
            ['walletProduct' => $this->walletProduct, 'additionalProperties' => $this->additionalProperties]
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
        $json['wallet_product'] = $this->walletProduct;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
