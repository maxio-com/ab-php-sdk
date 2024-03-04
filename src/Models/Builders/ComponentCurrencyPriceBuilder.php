<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCurrencyPrice
 *
 * @see ComponentCurrencyPrice
 */
class ComponentCurrencyPriceBuilder
{
    /**
     * @var ComponentCurrencyPrice
     */
    private $instance;

    private function __construct(ComponentCurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component currency price Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCurrencyPrice());
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
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets price field.
     */
    public function price(?string $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets formatted price field.
     */
    public function formattedPrice(?string $value): self
    {
        $this->instance->setFormattedPrice($value);
        return $this;
    }

    /**
     * Sets price id field.
     */
    public function priceId(?int $value): self
    {
        $this->instance->setPriceId($value);
        return $this;
    }

    /**
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new component currency price object.
     */
    public function build(): ComponentCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
