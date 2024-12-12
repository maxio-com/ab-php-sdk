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
     * Initializes a new Prepaid Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidConfiguration());
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
     * Initializes a new Prepaid Configuration object.
     */
    public function build(): PrepaidConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
