<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProductListItem;
use AdvancedBillingLib\Models\WalletProductsListResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductsListResponse
 *
 * @see WalletProductsListResponse
 */
class WalletProductsListResponseBuilder
{
    /**
     * @var WalletProductsListResponse
     */
    private $instance;

    private function __construct(WalletProductsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Products List Response Builder object.
     *
     * @param WalletProductListItem[] $walletProducts
     * @param int $totalCount
     * @param int $archivedCount
     */
    public static function init(array $walletProducts, int $totalCount, int $archivedCount): self
    {
        return new self(new WalletProductsListResponse($walletProducts, $totalCount, $archivedCount));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Wallet Products List Response object.
     */
    public function build(): WalletProductsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
