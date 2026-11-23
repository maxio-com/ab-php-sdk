<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletRecurringFunding;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletRecurringFunding
 *
 * @see WalletRecurringFunding
 */
class WalletRecurringFundingBuilder
{
    /**
     * @var WalletRecurringFunding
     */
    private $instance;

    private function __construct(WalletRecurringFunding $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Recurring Funding Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletRecurringFunding());
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
     * Sets entitlement id field.
     *
     * @param int|null $value
     */
    public function entitlementId(?int $value): self
    {
        $this->instance->setEntitlementId($value);
        return $this;
    }

    /**
     * Sets allowance field.
     *
     * @param string|null $value
     */
    public function allowance(?string $value): self
    {
        $this->instance->setAllowance($value);
        return $this;
    }

    /**
     * Unsets allowance field.
     */
    public function unsetAllowance(): self
    {
        $this->instance->unsetAllowance();
        return $this;
    }

    /**
     * Sets next grant at field.
     *
     * @param \DateTime|null $value
     */
    public function nextGrantAt(?\DateTime $value): self
    {
        $this->instance->setNextGrantAt($value);
        return $this;
    }

    /**
     * Unsets next grant at field.
     */
    public function unsetNextGrantAt(): self
    {
        $this->instance->unsetNextGrantAt();
        return $this;
    }

    /**
     * Sets next grant on field.
     *
     * @param \DateTime|null $value
     */
    public function nextGrantOn(?\DateTime $value): self
    {
        $this->instance->setNextGrantOn($value);
        return $this;
    }

    /**
     * Unsets next grant on field.
     */
    public function unsetNextGrantOn(): self
    {
        $this->instance->unsetNextGrantOn();
        return $this;
    }

    /**
     * Sets skipped periods field.
     *
     * @param int|null $value
     */
    public function skippedPeriods(?int $value): self
    {
        $this->instance->setSkippedPeriods($value);
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
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Unsets reason field.
     */
    public function unsetReason(): self
    {
        $this->instance->unsetReason();
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
     * Initializes a new Wallet Recurring Funding object.
     */
    public function build(): WalletRecurringFunding
    {
        return CoreHelper::clone($this->instance);
    }
}
