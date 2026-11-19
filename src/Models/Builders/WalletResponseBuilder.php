<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Wallet;
use AdvancedBillingLib\Models\WalletResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletResponse
 *
 * @see WalletResponse
 */
class WalletResponseBuilder
{
    /**
     * @var WalletResponse
     */
    private $instance;

    private function __construct(WalletResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Response Builder object.
     *
     * @param Wallet $wallet
     */
    public static function init(Wallet $wallet): self
    {
        return new self(new WalletResponse($wallet));
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
     * Initializes a new Wallet Response object.
     */
    public function build(): WalletResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
