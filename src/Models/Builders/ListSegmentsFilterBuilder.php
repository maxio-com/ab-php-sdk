<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSegmentsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSegmentsFilter
 *
 * @see ListSegmentsFilter
 */
class ListSegmentsFilterBuilder
{
    /**
     * @var ListSegmentsFilter
     */
    private $instance;

    private function __construct(ListSegmentsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Segments Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSegmentsFilter());
    }

    /**
     * Sets segment property 1 value field.
     *
     * @param string|null $value
     */
    public function segmentProperty1Value(?string $value): self
    {
        $this->instance->setSegmentProperty1Value($value);
        return $this;
    }

    /**
     * Sets segment property 2 value field.
     *
     * @param string|null $value
     */
    public function segmentProperty2Value(?string $value): self
    {
        $this->instance->setSegmentProperty2Value($value);
        return $this;
    }

    /**
     * Sets segment property 3 value field.
     *
     * @param string|null $value
     */
    public function segmentProperty3Value(?string $value): self
    {
        $this->instance->setSegmentProperty3Value($value);
        return $this;
    }

    /**
     * Sets segment property 4 value field.
     *
     * @param string|null $value
     */
    public function segmentProperty4Value(?string $value): self
    {
        $this->instance->setSegmentProperty4Value($value);
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
     * Initializes a new List Segments Filter object.
     */
    public function build(): ListSegmentsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
