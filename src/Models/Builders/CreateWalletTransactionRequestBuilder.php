<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateWalletTransactionRequest;
use AdvancedBillingLib\Models\WalletTransaction1;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateWalletTransactionRequest
 *
 * @see CreateWalletTransactionRequest
 */
class CreateWalletTransactionRequestBuilder
{
    /**
     * @var CreateWalletTransactionRequest
     */
    private $instance;

    private function __construct(CreateWalletTransactionRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Wallet Transaction Request Builder object.
     *
     * @param WalletTransaction1 $walletTransaction
     */
    public static function init(WalletTransaction1 $walletTransaction): self
    {
        return new self(new CreateWalletTransactionRequest($walletTransaction));
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
     * Initializes a new Create Wallet Transaction Request object.
     */
    public function build(): CreateWalletTransactionRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
