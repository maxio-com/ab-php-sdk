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

class WalletProductsListResponse implements \JsonSerializable
{
    /**
     * @var WalletProductListItem[]
     */
    private $walletProducts;

    /**
     * @var int
     */
    private $totalCount;

    /**
     * @var int
     */
    private $archivedCount;

    /**
     * @param WalletProductListItem[] $walletProducts
     * @param int $totalCount
     * @param int $archivedCount
     */
    public function __construct(array $walletProducts, int $totalCount, int $archivedCount)
    {
        $this->walletProducts = $walletProducts;
        $this->totalCount = $totalCount;
        $this->archivedCount = $archivedCount;
    }

    /**
     * Returns Wallet Products.
     *
     * @return WalletProductListItem[]
     */
    public function getWalletProducts(): array
    {
        return $this->walletProducts;
    }

    /**
     * Sets Wallet Products.
     *
     * @required
     * @maps wallet_products
     *
     * @param WalletProductListItem[] $walletProducts
     */
    public function setWalletProducts(array $walletProducts): void
    {
        $this->walletProducts = $walletProducts;
    }

    /**
     * Returns Total Count.
     * Total number of Wallet Products matching the filters, across all pages.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Sets Total Count.
     * Total number of Wallet Products matching the filters, across all pages.
     *
     * @required
     * @maps total_count
     */
    public function setTotalCount(int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Returns Archived Count.
     * Not a simple count of archived products matching the filters. With `status=archived`, equals
     * `total_count` (there's nothing else to report). With any other `status`, it's `0` whenever
     * `total_count` is non-zero, and only when `total_count` is `0` does it become the number of archived
     * Wallet Products matching the same `q` search term (ignoring `status`): an empty-state hint, not a
     * running total.
     */
    public function getArchivedCount(): int
    {
        return $this->archivedCount;
    }

    /**
     * Sets Archived Count.
     * Not a simple count of archived products matching the filters. With `status=archived`, equals
     * `total_count` (there's nothing else to report). With any other `status`, it's `0` whenever
     * `total_count` is non-zero, and only when `total_count` is `0` does it become the number of archived
     * Wallet Products matching the same `q` search term (ignoring `status`): an empty-state hint, not a
     * running total.
     *
     * @required
     * @maps archived_count
     */
    public function setArchivedCount(int $archivedCount): void
    {
        $this->archivedCount = $archivedCount;
    }

    /**
     * Converts the WalletProductsListResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductsListResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductsListResponse',
            [
                'walletProducts' => $this->walletProducts,
                'totalCount' => $this->totalCount,
                'archivedCount' => $this->archivedCount,
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
        $json['wallet_products'] = $this->walletProducts;
        $json['total_count']     = $this->totalCount;
        $json['archived_count']  = $this->archivedCount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
