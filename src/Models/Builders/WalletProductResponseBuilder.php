<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\WalletProductResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductResponse
 *
 * @see WalletProductResponse
 */
class WalletProductResponseBuilder
{
    /**
     * @var WalletProductResponse
     */
    private $instance;

    private function __construct(WalletProductResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Response Builder object.
     *
     * @param Component $walletProduct
     */
    public static function init(Component $walletProduct): self
    {
        return new self(new WalletProductResponse($walletProduct));
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
     * Initializes a new Wallet Product Response object.
     */
    public function build(): WalletProductResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
