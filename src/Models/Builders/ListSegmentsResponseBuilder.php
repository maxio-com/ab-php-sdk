<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSegmentsResponse;
use AdvancedBillingLib\Models\Segment;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSegmentsResponse
 *
 * @see ListSegmentsResponse
 */
class ListSegmentsResponseBuilder
{
    /**
     * @var ListSegmentsResponse
     */
    private $instance;

    private function __construct(ListSegmentsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Segments Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSegmentsResponse());
    }

    /**
     * Sets segments field.
     *
     * @param Segment[]|null $value
     */
    public function segments(?array $value): self
    {
        $this->instance->setSegments($value);
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
     * Initializes a new List Segments Response object.
     */
    public function build(): ListSegmentsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
