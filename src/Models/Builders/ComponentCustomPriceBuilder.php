<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentCustomPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentCustomPrice
 *
 * @see ComponentCustomPrice
 */
class ComponentCustomPriceBuilder
{
    /**
     * @var ComponentCustomPrice
     */
    private $instance;

    private function __construct(ComponentCustomPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component custom price Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentCustomPrice());
    }

    /**
     * Sets pricing scheme field.
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets prices field.
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Initializes a new component custom price object.
     */
    public function build(): ComponentCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
