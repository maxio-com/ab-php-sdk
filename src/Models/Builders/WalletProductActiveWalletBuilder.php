<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProductActiveWallet;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductActiveWallet
 *
 * @see WalletProductActiveWallet
 */
class WalletProductActiveWalletBuilder
{
    /**
     * @var WalletProductActiveWallet
     */
    private $instance;

    private function __construct(WalletProductActiveWallet $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Active Wallet Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletProductActiveWallet());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets company name field.
     *
     * @param string|null $value
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Sets purchase mechanism field.
     *
     * @param string|null $value
     */
    public function purchaseMechanism(?string $value): self
    {
        $this->instance->setPurchaseMechanism($value);
        return $this;
    }

    /**
     * Unsets purchase mechanism field.
     */
    public function unsetPurchaseMechanism(): self
    {
        $this->instance->unsetPurchaseMechanism();
        return $this;
    }

    /**
     * Sets price point name field.
     *
     * @param string|null $value
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Unsets price point name field.
     */
    public function unsetPricePointName(): self
    {
        $this->instance->unsetPricePointName();
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
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
     * Initializes a new Wallet Product Active Wallet object.
     */
    public function build(): WalletProductActiveWallet
    {
        return CoreHelper::clone($this->instance);
    }
}
