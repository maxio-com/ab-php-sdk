<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateCurrencyPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateCurrencyPrice
 *
 * @see CreateCurrencyPrice
 */
class CreateCurrencyPriceBuilder
{
    /**
     * @var CreateCurrencyPrice
     */
    private $instance;

    private function __construct(CreateCurrencyPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create currency price Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCurrencyPrice());
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
    public function price(?float $value): self
    {
        $this->instance->setPrice($value);
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
     * Initializes a new create currency price object.
     */
    public function build(): CreateCurrencyPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
