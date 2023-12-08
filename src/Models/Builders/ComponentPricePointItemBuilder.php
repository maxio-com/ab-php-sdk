<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointItem
 *
 * @see ComponentPricePointItem
 */
class ComponentPricePointItemBuilder
{
    /**
     * @var ComponentPricePointItem
     */
    private $instance;

    private function __construct(ComponentPricePointItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component price point item Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointItem());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
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
     * Initializes a new component price point item object.
     */
    public function build(): ComponentPricePointItem
    {
        return CoreHelper::clone($this->instance);
    }
}
