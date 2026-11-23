<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletTransaction1;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletTransaction1
 *
 * @see WalletTransaction1
 */
class WalletTransaction1Builder
{
    /**
     * @var WalletTransaction1
     */
    private $instance;

    private function __construct(WalletTransaction1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Transaction 1 Builder object.
     *
     * @param string $kind
     * @param string|int $amount
     */
    public static function init(string $kind, $amount): self
    {
        return new self(new WalletTransaction1($kind, $amount));
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param string|null $value
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
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
     * Initializes a new Wallet Transaction 1 object.
     */
    public function build(): WalletTransaction1
    {
        return CoreHelper::clone($this->instance);
    }
}
