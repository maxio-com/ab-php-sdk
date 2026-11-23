<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletPurchase;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletPurchase
 *
 * @see WalletPurchase
 */
class WalletPurchaseBuilder
{
    /**
     * @var WalletPurchase
     */
    private $instance;

    private function __construct(WalletPurchase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Purchase Builder object.
     *
     * @param int $id
     * @param int $pricePointId
     * @param string $invoiceUid
     * @param string $quantity
     */
    public static function init(int $id, int $pricePointId, string $invoiceUid, string $quantity): self
    {
        return new self(new WalletPurchase($id, $pricePointId, $invoiceUid, $quantity));
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
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
     * Initializes a new Wallet Purchase object.
     */
    public function build(): WalletPurchase
    {
        return CoreHelper::clone($this->instance);
    }
}
