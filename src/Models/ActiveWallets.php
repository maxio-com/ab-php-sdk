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

class ActiveWallets implements \JsonSerializable
{
    /**
     * @var int
     */
    private $total;

    /**
     * @var WalletProductActiveWallet[]
     */
    private $sample;

    /**
     * @param int $total
     * @param WalletProductActiveWallet[] $sample
     */
    public function __construct(int $total, array $sample)
    {
        $this->total = $total;
        $this->sample = $sample;
    }

    /**
     * Returns Total.
     * Total count of active wallets drawing on this product.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * Sets Total.
     * Total count of active wallets drawing on this product.
     *
     * @required
     * @maps total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    /**
     * Returns Sample.
     * Up to 50 of the most recently created active wallets, newest first.
     *
     * @return WalletProductActiveWallet[]
     */
    public function getSample(): array
    {
        return $this->sample;
    }

    /**
     * Sets Sample.
     * Up to 50 of the most recently created active wallets, newest first.
     *
     * @required
     * @maps sample
     *
     * @param WalletProductActiveWallet[] $sample
     */
    public function setSample(array $sample): void
    {
        $this->sample = $sample;
    }

    /**
     * Converts the ActiveWallets object to a human-readable string representation.
     *
     * @return string The string representation of the ActiveWallets object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ActiveWallets',
            [
                'total' => $this->total,
                'sample' => $this->sample,
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
        $json['total']  = $this->total;
        $json['sample'] = $this->sample;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
