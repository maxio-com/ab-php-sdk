<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletPurchasePreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletPurchasePreview
 *
 * @see WalletPurchasePreview
 */
class WalletPurchasePreviewBuilder
{
    /**
     * @var WalletPurchasePreview
     */
    private $instance;

    private function __construct(WalletPurchasePreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Purchase Preview Builder object.
     *
     * @param int $pricePointId
     * @param string $currency
     * @param string $quantity
     * @param string $amount
     */
    public static function init(int $pricePointId, string $currency, string $quantity, string $amount): self
    {
        return new self(new WalletPurchasePreview($pricePointId, $currency, $quantity, $amount));
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
     * Initializes a new Wallet Purchase Preview object.
     */
    public function build(): WalletPurchasePreview
    {
        return CoreHelper::clone($this->instance);
    }
}
