<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPrice
 *
 * @see ComponentPrice
 */
class ComponentPriceBuilder
{
    /**
     * @var ComponentPrice
     */
    private $instance;

    private function __construct(ComponentPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPrice());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
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
     * Sets starting quantity field.
     *
     * @param int|null $value
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
     *
     * @param int|null $value
     */
    public function endingQuantity(?int $value): self
    {
        $this->instance->setEndingQuantity($value);
        return $this;
    }

    /**
     * Unsets ending quantity field.
     */
    public function unsetEndingQuantity(): self
    {
        $this->instance->unsetEndingQuantity();
        return $this;
    }

    /**
     * Sets unit price field.
     *
     * @param string|null $value
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets formatted unit price field.
     *
     * @param string|null $value
     */
    public function formattedUnitPrice(?string $value): self
    {
        $this->instance->setFormattedUnitPrice($value);
        return $this;
    }

    /**
     * Sets segment id field.
     *
     * @param int|null $value
     */
    public function segmentId(?int $value): self
    {
        $this->instance->setSegmentId($value);
        return $this;
    }

    /**
     * Unsets segment id field.
     */
    public function unsetSegmentId(): self
    {
        $this->instance->unsetSegmentId();
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
     * Initializes a new Component Price object.
     */
    public function build(): ComponentPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
