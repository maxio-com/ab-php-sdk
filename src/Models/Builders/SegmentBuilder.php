<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Segment;
use Core\Utils\CoreHelper;

/**
 * Builder for model Segment
 *
 * @see Segment
 */
class SegmentBuilder
{
    /**
     * @var Segment
     */
    private $instance;

    private function __construct(Segment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new segment Builder object.
     */
    public static function init(): self
    {
        return new self(new Segment());
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
     * Sets price point id field.
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Sets event based billing metric id field.
     */
    public function eventBasedBillingMetricId(?int $value): self
    {
        $this->instance->setEventBasedBillingMetricId($value);
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
     * Sets segment property 1 value field.
     */
    public function segmentProperty1Value($value): self
    {
        $this->instance->setSegmentProperty1Value($value);
        return $this;
    }

    /**
     * Sets segment property 2 value field.
     */
    public function segmentProperty2Value($value): self
    {
        $this->instance->setSegmentProperty2Value($value);
        return $this;
    }

    /**
     * Sets segment property 3 value field.
     */
    public function segmentProperty3Value($value): self
    {
        $this->instance->setSegmentProperty3Value($value);
        return $this;
    }

    /**
     * Sets segment property 4 value field.
     */
    public function segmentProperty4Value($value): self
    {
        $this->instance->setSegmentProperty4Value($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
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
     * Initializes a new segment object.
     */
    public function build(): Segment
    {
        return CoreHelper::clone($this->instance);
    }
}
