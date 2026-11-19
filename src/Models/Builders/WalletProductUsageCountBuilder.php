<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProductUsageCount;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductUsageCount
 *
 * @see WalletProductUsageCount
 */
class WalletProductUsageCountBuilder
{
    /**
     * @var WalletProductUsageCount
     */
    private $instance;

    private function __construct(WalletProductUsageCount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Usage Count Builder object.
     *
     * @param int $walletConfigurations
     * @param int $activeWallets
     */
    public static function init(int $walletConfigurations, int $activeWallets): self
    {
        return new self(new WalletProductUsageCount($walletConfigurations, $activeWallets));
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
     * Initializes a new Wallet Product Usage Count object.
     */
    public function build(): WalletProductUsageCount
    {
        return CoreHelper::clone($this->instance);
    }
}
