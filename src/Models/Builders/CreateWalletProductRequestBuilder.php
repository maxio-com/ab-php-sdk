<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateWalletProductRequest;
use AdvancedBillingLib\Models\WalletProduct;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateWalletProductRequest
 *
 * @see CreateWalletProductRequest
 */
class CreateWalletProductRequestBuilder
{
    /**
     * @var CreateWalletProductRequest
     */
    private $instance;

    private function __construct(CreateWalletProductRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Wallet Product Request Builder object.
     *
     * @param WalletProduct $walletProduct
     */
    public static function init(WalletProduct $walletProduct): self
    {
        return new self(new CreateWalletProductRequest($walletProduct));
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
     * Initializes a new Create Wallet Product Request object.
     */
    public function build(): CreateWalletProductRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
