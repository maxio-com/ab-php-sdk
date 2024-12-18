<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\TaxConfiguration;
use Core\Utils\CoreHelper;

/**
 * Builder for model TaxConfiguration
 *
 * @see TaxConfiguration
 */
class TaxConfigurationBuilder
{
    /**
     * @var TaxConfiguration
     */
    private $instance;

    private function __construct(TaxConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tax Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new TaxConfiguration());
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets destination address field.
     *
     * @param string|null $value
     */
    public function destinationAddress(?string $value): self
    {
        $this->instance->setDestinationAddress($value);
        return $this;
    }

    /**
     * Sets fully configured field.
     *
     * @param bool|null $value
     */
    public function fullyConfigured(?bool $value): self
    {
        $this->instance->setFullyConfigured($value);
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
     * Initializes a new Tax Configuration object.
     */
    public function build(): TaxConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
