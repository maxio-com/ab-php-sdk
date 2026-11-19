<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateWalletProductRequest;
use AdvancedBillingLib\Models\WalletProduct1;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateWalletProductRequest
 *
 * @see UpdateWalletProductRequest
 */
class UpdateWalletProductRequestBuilder
{
    /**
     * @var UpdateWalletProductRequest
     */
    private $instance;

    private function __construct(UpdateWalletProductRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Wallet Product Request Builder object.
     *
     * @param WalletProduct1 $walletProduct
     */
    public static function init(WalletProduct1 $walletProduct): self
    {
        return new self(new UpdateWalletProductRequest($walletProduct));
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
     * Initializes a new Update Wallet Product Request object.
     */
    public function build(): UpdateWalletProductRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
