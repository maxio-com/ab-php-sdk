<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletPurchase;
use AdvancedBillingLib\Models\WalletPurchaseResultResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletPurchaseResultResponse
 *
 * @see WalletPurchaseResultResponse
 */
class WalletPurchaseResultResponseBuilder
{
    /**
     * @var WalletPurchaseResultResponse
     */
    private $instance;

    private function __construct(WalletPurchaseResultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Purchase Result Response Builder object.
     *
     * @param WalletPurchase[] $walletPurchases
     * @param string $balance
     */
    public static function init(array $walletPurchases, string $balance): self
    {
        return new self(new WalletPurchaseResultResponse($walletPurchases, $balance));
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
     * Initializes a new Wallet Purchase Result Response object.
     */
    public function build(): WalletPurchaseResultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
