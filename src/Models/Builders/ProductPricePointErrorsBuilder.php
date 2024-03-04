<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductPricePointErrors;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductPricePointErrors
 *
 * @see ProductPricePointErrors
 */
class ProductPricePointErrorsBuilder
{
    /**
     * @var ProductPricePointErrors
     */
    private $instance;

    private function __construct(ProductPricePointErrors $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new product price point errors Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductPricePointErrors());
    }

    /**
     * Sets price point field.
     */
    public function pricePoint(?string $value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval(?array $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     */
    public function intervalUnit(?array $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?array $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets price field.
     */
    public function price(?array $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Sets price in cents field.
     */
    public function priceInCents(?array $value): self
    {
        $this->instance->setPriceInCents($value);
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
     * Initializes a new product price point errors object.
     */
    public function build(): ProductPricePointErrors
    {
        return CoreHelper::clone($this->instance);
    }
}
