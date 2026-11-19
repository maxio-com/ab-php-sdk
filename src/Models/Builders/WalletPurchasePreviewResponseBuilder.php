<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletPurchasePreview;
use AdvancedBillingLib\Models\WalletPurchasePreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletPurchasePreviewResponse
 *
 * @see WalletPurchasePreviewResponse
 */
class WalletPurchasePreviewResponseBuilder
{
    /**
     * @var WalletPurchasePreviewResponse
     */
    private $instance;

    private function __construct(WalletPurchasePreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Purchase Preview Response Builder object.
     *
     * @param WalletPurchasePreview[] $walletPurchasePreviews
     */
    public static function init(array $walletPurchasePreviews): self
    {
        return new self(new WalletPurchasePreviewResponse($walletPurchasePreviews));
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
     * Initializes a new Wallet Purchase Preview Response object.
     */
    public function build(): WalletPurchasePreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
