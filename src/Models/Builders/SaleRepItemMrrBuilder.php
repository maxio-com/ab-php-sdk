<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SaleRepItemMrr;
use Core\Utils\CoreHelper;

/**
 * Builder for model SaleRepItemMrr
 *
 * @see SaleRepItemMrr
 */
class SaleRepItemMrrBuilder
{
    /**
     * @var SaleRepItemMrr
     */
    private $instance;

    private function __construct(SaleRepItemMrr $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Sale Rep Item Mrr Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepItemMrr());
    }

    /**
     * Sets mrr field.
     *
     * @param string|null $value
     */
    public function mrr(?string $value): self
    {
        $this->instance->setMrr($value);
        return $this;
    }

    /**
     * Sets usage field.
     *
     * @param string|null $value
     */
    public function usage(?string $value): self
    {
        $this->instance->setUsage($value);
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param string|null $value
     */
    public function recurring(?string $value): self
    {
        $this->instance->setRecurring($value);
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
     * Initializes a new Sale Rep Item Mrr object.
     */
    public function build(): SaleRepItemMrr
    {
        return CoreHelper::clone($this->instance);
    }
}
