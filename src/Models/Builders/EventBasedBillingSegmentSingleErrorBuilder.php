<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\EventBasedBillingSegmentSingleError;
use Core\Utils\CoreHelper;

/**
 * Builder for model EventBasedBillingSegmentSingleError
 *
 * @see EventBasedBillingSegmentSingleError
 */
class EventBasedBillingSegmentSingleErrorBuilder
{
    /**
     * @var EventBasedBillingSegmentSingleError
     */
    private $instance;

    private function __construct(EventBasedBillingSegmentSingleError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Event Based Billing Segment Single Error Builder object.
     *
     * @param string[] $pricePoint
     */
    public static function init(array $pricePoint): self
    {
        return new self(new EventBasedBillingSegmentSingleError($pricePoint));
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
     * Initializes a new Event Based Billing Segment Single Error object.
     */
    public function build(): EventBasedBillingSegmentSingleError
    {
        return CoreHelper::clone($this->instance);
    }
}
