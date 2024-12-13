<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CalendarBilling;
use Core\Utils\CoreHelper;

/**
 * Builder for model CalendarBilling
 *
 * @see CalendarBilling
 */
class CalendarBillingBuilder
{
    /**
     * @var CalendarBilling
     */
    private $instance;

    private function __construct(CalendarBilling $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Calendar Billing Builder object.
     */
    public static function init(): self
    {
        return new self(new CalendarBilling());
    }

    /**
     * Sets snap day field.
     *
     * @param int|string|null $value
     */
    public function snapDay($value): self
    {
        $this->instance->setSnapDay($value);
        return $this;
    }

    /**
     * Sets calendar billing first charge field.
     *
     * @param string|null $value
     */
    public function calendarBillingFirstCharge(?string $value): self
    {
        $this->instance->setCalendarBillingFirstCharge($value);
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
     * Initializes a new Calendar Billing object.
     */
    public function build(): CalendarBilling
    {
        return CoreHelper::clone($this->instance);
    }
}
