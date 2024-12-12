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
     * Initializes a new Upsert Prepaid Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new UpsertPrepaidConfiguration());
    }

    /**
     * Sets initial funding amount in cents field.
     *
     * @param int|null $value
     */
    public function initialFundingAmountInCents(?int $value): self
    {
        $this->instance->setInitialFundingAmountInCents($value);
        return $this;
    }

    /**
     * Sets replenish to amount in cents field.
     *
     * @param int|null $value
     */
    public function replenishToAmountInCents(?int $value): self
    {
        $this->instance->setReplenishToAmountInCents($value);
        return $this;
    }

    /**
     * Sets auto replenish field.
     *
     * @param bool|null $value
     */
    public function autoReplenish(?bool $value): self
    {
        $this->instance->setAutoReplenish($value);
        return $this;
    }

    /**
     * Sets replenish threshold amount in cents field.
     *
     * @param int|null $value
     */
    public function replenishThresholdAmountInCents(?int $value): self
    {
        $this->instance->setReplenishThresholdAmountInCents($value);
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
     * Initializes a new Upsert Prepaid Configuration object.
     */
    public function build(): UpsertPrepaidConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
