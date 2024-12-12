<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointErrorItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointErrorItem
 *
 * @see ComponentPricePointErrorItem
 */
class ComponentPricePointErrorItemBuilder
{
    /**
     * @var ComponentPricePointErrorItem
     */
    private $instance;

    private function __construct(ComponentPricePointErrorItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Point Error Item Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointErrorItem());
    }

    /**
     * Sets component id field.
     *
     * @param int|null $value
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets price point field.
     *
     * @param int|null $value
     */
    public function pricePoint(?int $value): self
    {
        $this->instance->setPricePoint($value);
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
     * Initializes a new Component Price Point Error Item object.
     */
    public function build(): ComponentPricePointErrorItem
    {
        return CoreHelper::clone($this->instance);
    }
}
