<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SegmentPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model SegmentPrice
 *
 * @see SegmentPrice
 */
class SegmentPriceBuilder
{
    /**
     * @var SegmentPrice
     */
    private $instance;

    private function __construct(SegmentPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new segment price Builder object.
     */
    public static function init(): self
    {
        return new self(new SegmentPrice());
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
     * Sets component id field.
     */
    public function componentId(?int $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets starting quantity field.
     */
    public function startingQuantity(?int $value): self
    {
        $this->instance->setStartingQuantity($value);
        return $this;
    }

    /**
     * Sets ending quantity field.
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
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
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
     * Sets formatted unit price field.
     */
    public function formattedUnitPrice(?string $value): self
    {
        $this->instance->setFormattedUnitPrice($value);
        return $this;
    }

    /**
     * Sets segment id field.
     */
    public function segmentId(?int $value): self
    {
        $this->instance->setSegmentId($value);
        return $this;
    }

    /**
     * Initializes a new segment price object.
     */
    public function build(): SegmentPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
