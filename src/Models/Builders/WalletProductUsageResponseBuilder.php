<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ActiveWallets;
use AdvancedBillingLib\Models\WalletProductUsageResponse;
use AdvancedBillingLib\Models\WalletProductUsageTemplate;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductUsageResponse
 *
 * @see WalletProductUsageResponse
 */
class WalletProductUsageResponseBuilder
{
    /**
     * @var WalletProductUsageResponse
     */
    private $instance;

    private function __construct(WalletProductUsageResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Usage Response Builder object.
     *
     * @param WalletProductUsageTemplate[] $walletTemplates
     * @param WalletProductUsageTemplate[] $pricePointOverrides
     * @param ActiveWallets $activeWallets
     */
    public static function init(array $walletTemplates, array $pricePointOverrides, ActiveWallets $activeWallets): self
    {
        return new self(new WalletProductUsageResponse($walletTemplates, $pricePointOverrides, $activeWallets));
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
     * Initializes a new Wallet Product Usage Response object.
     */
    public function build(): WalletProductUsageResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
