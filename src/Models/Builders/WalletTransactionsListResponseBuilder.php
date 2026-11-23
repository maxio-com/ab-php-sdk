<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPublicKeysMeta;
use AdvancedBillingLib\Models\WalletTransaction;
use AdvancedBillingLib\Models\WalletTransactionsListResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletTransactionsListResponse
 *
 * @see WalletTransactionsListResponse
 */
class WalletTransactionsListResponseBuilder
{
    /**
     * @var WalletTransactionsListResponse
     */
    private $instance;

    private function __construct(WalletTransactionsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Transactions List Response Builder object.
     *
     * @param WalletTransaction[] $walletTransactions
     * @param ListPublicKeysMeta $meta
     */
    public static function init(array $walletTransactions, ListPublicKeysMeta $meta): self
    {
        return new self(new WalletTransactionsListResponse($walletTransactions, $meta));
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
     * Initializes a new Wallet Transactions List Response object.
     */
    public function build(): WalletTransactionsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
