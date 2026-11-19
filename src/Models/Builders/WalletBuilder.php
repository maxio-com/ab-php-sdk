<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Meter;
use AdvancedBillingLib\Models\Wallet;
use AdvancedBillingLib\Models\WalletGrant;
use AdvancedBillingLib\Models\WalletRecurringFunding;
use Core\Utils\CoreHelper;

/**
 * Builder for model Wallet
 *
 * @see Wallet
 */
class WalletBuilder
{
    /**
     * @var Wallet
     */
    private $instance;

    private function __construct(Wallet $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Builder object.
     */
    public static function init(): self
    {
        return new self(new Wallet());
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
     * Sets owner type field.
     *
     * @param string|null $value
     */
    public function ownerType(?string $value): self
    {
        $this->instance->setOwnerType($value);
        return $this;
    }

    /**
     * Sets owner id field.
     *
     * @param int|null $value
     */
    public function ownerId(?int $value): self
    {
        $this->instance->setOwnerId($value);
        return $this;
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
     * Sets wallet product id field.
     *
     * @param int|null $value
     */
    public function walletProductId(?int $value): self
    {
        $this->instance->setWalletProductId($value);
        return $this;
    }

    /**
     * Sets wallet product name field.
     *
     * @param string|null $value
     */
    public function walletProductName(?string $value): self
    {
        $this->instance->setWalletProductName($value);
        return $this;
    }

    /**
     * Sets unit field.
     *
     * @param string|null $value
     */
    public function unit(?string $value): self
    {
        $this->instance->setUnit($value);
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
     * Unsets price point id field.
     */
    public function unsetPricePointId(): self
    {
        $this->instance->unsetPricePointId();
        return $this;
    }

    /**
     * Sets balance field.
     *
     * @param string|null $value
     */
    public function balance(?string $value): self
    {
        $this->instance->setBalance($value);
        return $this;
    }

    /**
     * Sets posted balance field.
     *
     * @param string|null $value
     */
    public function postedBalance(?string $value): self
    {
        $this->instance->setPostedBalance($value);
        return $this;
    }

    /**
     * Sets meter field.
     *
     * @param Meter|null $value
     */
    public function meter(?Meter $value): self
    {
        $this->instance->setMeter($value);
        return $this;
    }

    /**
     * Unsets meter field.
     */
    public function unsetMeter(): self
    {
        $this->instance->unsetMeter();
        return $this;
    }

    /**
     * Sets metered through at field.
     *
     * @param \DateTime|null $value
     */
    public function meteredThroughAt(?\DateTime $value): self
    {
        $this->instance->setMeteredThroughAt($value);
        return $this;
    }

    /**
     * Unsets metered through at field.
     */
    public function unsetMeteredThroughAt(): self
    {
        $this->instance->unsetMeteredThroughAt();
        return $this;
    }

    /**
     * Sets metered recheck after seconds field.
     *
     * @param int|null $value
     */
    public function meteredRecheckAfterSeconds(?int $value): self
    {
        $this->instance->setMeteredRecheckAfterSeconds($value);
        return $this;
    }

    /**
     * Unsets metered recheck after seconds field.
     */
    public function unsetMeteredRecheckAfterSeconds(): self
    {
        $this->instance->unsetMeteredRecheckAfterSeconds();
        return $this;
    }

    /**
     * Sets metered stale field.
     *
     * @param bool|null $value
     */
    public function meteredStale(?bool $value): self
    {
        $this->instance->setMeteredStale($value);
        return $this;
    }

    /**
     * Unsets metered stale field.
     */
    public function unsetMeteredStale(): self
    {
        $this->instance->unsetMeteredStale();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
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
     * Sets origin field.
     *
     * @param string|null $value
     */
    public function origin(?string $value): self
    {
        $this->instance->setOrigin($value);
        return $this;
    }

    /**
     * Sets feature key field.
     *
     * @param string|null $value
     */
    public function featureKey(?string $value): self
    {
        $this->instance->setFeatureKey($value);
        return $this;
    }

    /**
     * Unsets feature key field.
     */
    public function unsetFeatureKey(): self
    {
        $this->instance->unsetFeatureKey();
        return $this;
    }

    /**
     * Sets grants field.
     *
     * @param WalletGrant[]|null $value
     */
    public function grants(?array $value): self
    {
        $this->instance->setGrants($value);
        return $this;
    }

    /**
     * Sets recurring funding field.
     *
     * @param WalletRecurringFunding[]|null $value
     */
    public function recurringFunding(?array $value): self
    {
        $this->instance->setRecurringFunding($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
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
     * Initializes a new Wallet object.
     */
    public function build(): Wallet
    {
        return CoreHelper::clone($this->instance);
    }
}
