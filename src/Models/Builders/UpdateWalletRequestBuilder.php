<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateWalletRequest;
use AdvancedBillingLib\Models\Wallet2;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateWalletRequest
 *
 * @see UpdateWalletRequest
 */
class UpdateWalletRequestBuilder
{
    /**
     * @var UpdateWalletRequest
     */
    private $instance;

    private function __construct(UpdateWalletRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Wallet Request Builder object.
     *
     * @param Wallet2 $wallet
     */
    public static function init(Wallet2 $wallet): self
    {
        return new self(new UpdateWalletRequest($wallet));
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
     * Initializes a new Update Wallet Request object.
     */
    public function build(): UpdateWalletRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
