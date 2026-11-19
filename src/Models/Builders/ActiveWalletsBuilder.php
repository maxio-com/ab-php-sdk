<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ActiveWallets;
use AdvancedBillingLib\Models\WalletProductActiveWallet;
use Core\Utils\CoreHelper;

/**
 * Builder for model ActiveWallets
 *
 * @see ActiveWallets
 */
class ActiveWalletsBuilder
{
    /**
     * @var ActiveWallets
     */
    private $instance;

    private function __construct(ActiveWallets $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Active Wallets Builder object.
     *
     * @param int $total
     * @param WalletProductActiveWallet[] $sample
     */
    public static function init(int $total, array $sample): self
    {
        return new self(new ActiveWallets($total, $sample));
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
     * Initializes a new Active Wallets object.
     */
    public function build(): ActiveWallets
    {
        return CoreHelper::clone($this->instance);
    }
}
