<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\SecondaryPricing;
use Core\Utils\CoreHelper;

/**
 * Builder for model SecondaryPricing
 *
 * @see SecondaryPricing
 */
class SecondaryPricingBuilder
{
    /**
     * @var SecondaryPricing
     */
    private $instance;

    private function __construct(SecondaryPricing $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Secondary Pricing Builder object.
     */
    public static function init(): self
    {
        return new self(new SecondaryPricing());
    }

    /**
     * Sets pricing scheme field.
     *
     * @param string|null $value
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets prices field.
     *
     * @param Price[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
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
     * Initializes a new Secondary Pricing object.
     */
    public function build(): SecondaryPricing
    {
        return CoreHelper::clone($this->instance);
    }
}
