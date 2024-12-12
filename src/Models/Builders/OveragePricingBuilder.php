<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OveragePricing;
use AdvancedBillingLib\Models\Price;
use Core\Utils\CoreHelper;

/**
 * Builder for model OveragePricing
 *
 * @see OveragePricing
 */
class OveragePricingBuilder
{
    /**
     * @var OveragePricing
     */
    private $instance;

    private function __construct(OveragePricing $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Overage Pricing Builder object.
     *
     * @param string $pricingScheme
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new OveragePricing($pricingScheme));
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
     * Initializes a new Overage Pricing object.
     */
    public function build(): OveragePricing
    {
        return CoreHelper::clone($this->instance);
    }
}
