<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidConfiguration;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidConfiguration
 *
 * @see PrepaidConfiguration
 */
class PrepaidConfigurationBuilder
{
    /**
     * @var PrepaidConfiguration
     */
    private $instance;

    private function __construct(PrepaidConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepaid configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidConfiguration());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets initial funding amount in cents field.
     */
    public function initialFundingAmountInCents(?int $value): self
    {
        $this->instance->setInitialFundingAmountInCents($value);
        return $this;
    }

    /**
     * Sets replenish to amount in cents field.
     */
    public function replenishToAmountInCents(?int $value): self
    {
        $this->instance->setReplenishToAmountInCents($value);
        return $this;
    }

    /**
     * Sets auto replenish field.
     */
    public function autoReplenish(?bool $value): self
    {
        $this->instance->setAutoReplenish($value);
        return $this;
    }

    /**
     * Sets replenish threshold amount in cents field.
     */
    public function replenishThresholdAmountInCents(?int $value): self
    {
        $this->instance->setReplenishThresholdAmountInCents($value);
        return $this;
    }

    /**
     * Initializes a new prepaid configuration object.
     */
    public function build(): PrepaidConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
