<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

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
     * Initializes a new create segment Builder object.
     */
    public static function init(string $pricingScheme): self
    {
        return new self(new CreateSegment($pricingScheme));
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
     * Sets prices field.
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Initializes a new create segment object.
     */
    public function build(): CreateSegment
    {
        return CoreHelper::clone($this->instance);
    }
}
