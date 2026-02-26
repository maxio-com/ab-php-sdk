<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CloneComponentPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model CloneComponentPricePoint
 *
 * @see CloneComponentPricePoint
 */
class CloneComponentPricePointBuilder
{
    /**
     * @var CloneComponentPricePoint
     */
    private $instance;

    private function __construct(CloneComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Clone Component Price Point Builder object.
     *
     * @param string $name
     */
    public static function init(string $name): self
    {
        return new self(new CloneComponentPricePoint($name));
    }

    /**
     * Sets handle field.
     *
     * @param string|null $value
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
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
     * Initializes a new Clone Component Price Point object.
     */
    public function build(): CloneComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
