<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\EventBasedBillingSegmentError;
use Core\Utils\CoreHelper;

/**
 * Builder for model EventBasedBillingSegmentError
 *
 * @see EventBasedBillingSegmentError
 */
class EventBasedBillingSegmentErrorBuilder
{
    /**
     * @var EventBasedBillingSegmentError
     */
    private $instance;

    private function __construct(EventBasedBillingSegmentError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new event based billing segment error Builder object.
     */
    public static function init(array $segments): self
    {
        return new self(new EventBasedBillingSegmentError($segments));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new event based billing segment error object.
     */
    public function build(): EventBasedBillingSegmentError
    {
        return CoreHelper::clone($this->instance);
    }
}
