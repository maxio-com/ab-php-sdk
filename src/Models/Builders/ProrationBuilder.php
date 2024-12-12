<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Proration;
use Core\Utils\CoreHelper;

/**
 * Builder for model Proration
 *
 * @see Proration
 */
class ProrationBuilder
{
    /**
     * @var Proration
     */
    private $instance;

    private function __construct(Proration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Proration Builder object.
     */
    public static function init(): self
    {
        return new self(new Proration());
    }

    /**
     * Sets preserve period field.
     *
     * @param bool|null $value
     */
    public function preservePeriod(?bool $value): self
    {
        $this->instance->setPreservePeriod($value);
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
     * Initializes a new Proration object.
     */
    public function build(): Proration
    {
        return CoreHelper::clone($this->instance);
    }
}
