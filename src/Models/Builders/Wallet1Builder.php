<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Wallet1;
use Core\Utils\CoreHelper;

/**
 * Builder for model Wallet1
 *
 * @see Wallet1
 */
class Wallet1Builder
{
    /**
     * @var Wallet1
     */
    private $instance;

    private function __construct(Wallet1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet 1 Builder object.
     *
     * @param int $subscriptionId
     * @param int|string $walletProductId
     */
    public static function init(int $subscriptionId, $walletProductId): self
    {
        return new self(new Wallet1($subscriptionId, $walletProductId));
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Unsets name field.
     */
    public function unsetName(): self
    {
        $this->instance->unsetName();
        return $this;
    }

    /**
     * Sets depletion policy field.
     *
     * @param string|null $value
     */
    public function depletionPolicy(?string $value): self
    {
        $this->instance->setDepletionPolicy($value);
        return $this;
    }

    /**
     * Sets hard stop overflow field.
     *
     * @param string|null $value
     */
    public function hardStopOverflow(?string $value): self
    {
        $this->instance->setHardStopOverflow($value);
        return $this;
    }

    /**
     * Sets meter id field.
     *
     * @param int|null $value
     */
    public function meterId(?int $value): self
    {
        $this->instance->setMeterId($value);
        return $this;
    }

    /**
     * Sets conversion rate field.
     *
     * @param string|int|null $value
     */
    public function conversionRate($value): self
    {
        $this->instance->setConversionRate($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets initial balance field.
     *
     * @param string|int|null $value
     */
    public function initialBalance($value): self
    {
        $this->instance->setInitialBalance($value);
        return $this;
    }

    /**
     * Sets initial balance expires at field.
     *
     * @param string|null $value
     */
    public function initialBalanceExpiresAt(?string $value): self
    {
        $this->instance->setInitialBalanceExpiresAt($value);
        return $this;
    }

    /**
     * Unsets initial balance expires at field.
     */
    public function unsetInitialBalanceExpiresAt(): self
    {
        $this->instance->unsetInitialBalanceExpiresAt();
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
     * Initializes a new Wallet 1 object.
     */
    public function build(): Wallet1
    {
        return CoreHelper::clone($this->instance);
    }
}
