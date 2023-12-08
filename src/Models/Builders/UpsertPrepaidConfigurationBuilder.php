<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpsertPrepaidConfiguration;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpsertPrepaidConfiguration
 *
 * @see UpsertPrepaidConfiguration
 */
class UpsertPrepaidConfigurationBuilder
{
    /**
     * @var UpsertPrepaidConfiguration
     */
    private $instance;

    private function __construct(UpsertPrepaidConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new upsert prepaid configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new UpsertPrepaidConfiguration());
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
     * Initializes a new upsert prepaid configuration object.
     */
    public function build(): UpsertPrepaidConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
