<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateSegmentPrice;
use AdvancedBillingLib\Models\SubscriptionComponentCustomPriceSegment;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionComponentCustomPriceSegment
 *
 * @see SubscriptionComponentCustomPriceSegment
 */
class SubscriptionComponentCustomPriceSegmentBuilder
{
    /**
     * @var SubscriptionComponentCustomPriceSegment
     */
    private $instance;

    private function __construct(SubscriptionComponentCustomPriceSegment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Component Custom Price Segment Builder object.
     *
     * @param string $pricingScheme
     * @param CreateOrUpdateSegmentPrice[] $prices
     */
    public static function init(string $pricingScheme, array $prices): self
    {
        return new self(new SubscriptionComponentCustomPriceSegment($pricingScheme, $prices));
    }

    /**
     * Sets segment property 1 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty1Value($value): self
    {
        $this->instance->setSegmentProperty1Value($value);
        return $this;
    }

    /**
     * Sets segment property 2 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty2Value($value): self
    {
        $this->instance->setSegmentProperty2Value($value);
        return $this;
    }

    /**
     * Sets segment property 3 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty3Value($value): self
    {
        $this->instance->setSegmentProperty3Value($value);
        return $this;
    }

    /**
     * Sets segment property 4 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty4Value($value): self
    {
        $this->instance->setSegmentProperty4Value($value);
        return $this;
    }

    /**
     * Sets segment property 5 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty5Value($value): self
    {
        $this->instance->setSegmentProperty5Value($value);
        return $this;
    }

    /**
     * Sets segment property 6 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty6Value($value): self
    {
        $this->instance->setSegmentProperty6Value($value);
        return $this;
    }

    /**
     * Sets segment property 7 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty7Value($value): self
    {
        $this->instance->setSegmentProperty7Value($value);
        return $this;
    }

    /**
     * Sets segment property 8 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty8Value($value): self
    {
        $this->instance->setSegmentProperty8Value($value);
        return $this;
    }

    /**
     * Sets segment property 9 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty9Value($value): self
    {
        $this->instance->setSegmentProperty9Value($value);
        return $this;
    }

    /**
     * Sets segment property 10 value field.
     *
     * @param string|float|int|null $value
     */
    public function segmentProperty10Value($value): self
    {
        $this->instance->setSegmentProperty10Value($value);
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
     * Initializes a new Subscription Component Custom Price Segment object.
     */
    public function build(): SubscriptionComponentCustomPriceSegment
    {
        return CoreHelper::clone($this->instance);
    }
}
