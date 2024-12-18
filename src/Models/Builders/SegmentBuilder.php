<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Segment;
use AdvancedBillingLib\Models\SegmentPrice;
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
     * Initializes a new Segment Builder object.
     */
    public static function init(): self
    {
        return new self(new Segment());
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
     * Sets event based billing metric id field.
     *
     * @param int|null $value
     */
    public function eventBasedBillingMetricId(?int $value): self
    {
        $this->instance->setEventBasedBillingMetricId($value);
        return $this;
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
     * Sets segment property 1 value field.
     *
     * @param string|float|int|bool|null $value
     */
    public function segmentProperty1Value($value): self
    {
        $this->instance->setSegmentProperty1Value($value);
        return $this;
    }

    /**
     * Sets segment property 2 value field.
     *
     * @param string|float|int|bool|null $value
     */
    public function segmentProperty2Value($value): self
    {
        $this->instance->setSegmentProperty2Value($value);
        return $this;
    }

    /**
     * Sets segment property 3 value field.
     *
     * @param string|float|int|bool|null $value
     */
    public function segmentProperty3Value($value): self
    {
        $this->instance->setSegmentProperty3Value($value);
        return $this;
    }

    /**
     * Sets segment property 4 value field.
     *
     * @param string|float|int|bool|null $value
     */
    public function segmentProperty4Value($value): self
    {
        $this->instance->setSegmentProperty4Value($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets prices field.
     *
     * @param SegmentPrice[]|null $value
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
     * Initializes a new Segment object.
     */
    public function build(): Segment
    {
        return CoreHelper::clone($this->instance);
    }
}
