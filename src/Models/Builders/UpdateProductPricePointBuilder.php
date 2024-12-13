<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateProductPricePoint
 *
 * @see UpdateProductPricePoint
 */
class UpdateProductPricePointBuilder
{
    /**
     * @var UpdateProductPricePoint
     */
    private $instance;

    private function __construct(UpdateProductPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Product Price Point Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateProductPricePoint());
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
     * Sets price in cents field.
     *
     * @param int|null $value
     */
    public function priceInCents(?int $value): self
    {
        $this->instance->setPriceInCents($value);
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
     * Initializes a new Update Product Price Point object.
     */
    public function build(): UpdateProductPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
