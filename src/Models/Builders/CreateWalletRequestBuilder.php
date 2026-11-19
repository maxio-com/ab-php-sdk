<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateWalletRequest;
use AdvancedBillingLib\Models\Wallet1;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateWalletRequest
 *
 * @see CreateWalletRequest
 */
class CreateWalletRequestBuilder
{
    /**
     * @var CreateWalletRequest
     */
    private $instance;

    private function __construct(CreateWalletRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Wallet Request Builder object.
     *
     * @param Wallet1 $wallet
     */
    public static function init(Wallet1 $wallet): self
    {
        return new self(new CreateWalletRequest($wallet));
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
     * Initializes a new Create Wallet Request object.
     */
    public function build(): CreateWalletRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
