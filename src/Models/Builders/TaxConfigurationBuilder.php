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
     * Initializes a new tax configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new TaxConfiguration());
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets destination address field.
     */
    public function destinationAddress(?string $value): self
    {
        $this->instance->setDestinationAddress($value);
        return $this;
    }

    /**
     * Sets fully configured field.
     */
    public function fullyConfigured(?bool $value): self
    {
        $this->instance->setFullyConfigured($value);
        return $this;
    }

    /**
     * Initializes a new tax configuration object.
     */
    public function build(): TaxConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
