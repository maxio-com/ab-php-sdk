<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateSegmentPrice;
use AdvancedBillingLib\Models\CreateSegment;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSegment
 *
 * @see CreateSegment
 */
class CreateSegmentBuilder
{
    /**
     * @var CreateSegment
     */
    private $instance;

    private function __construct(CreateSegment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Segment Builder object.
     *
     * @param string $pricingScheme
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new CreateSegment($pricingScheme));
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
     * Sets prices field.
     *
     * @param CreateOrUpdateSegmentPrice[]|null $value
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
     * Initializes a new Create Segment object.
     */
    public function build(): CreateSegment
    {
        return CoreHelper::clone($this->instance);
    }
}
