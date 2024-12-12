<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionFilter
 *
 * @see SubscriptionFilter
 */
class SubscriptionFilterBuilder
{
    /**
     * @var SubscriptionFilter
     */
    private $instance;

    private function __construct(SubscriptionFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionFilter());
    }

    /**
     * Sets states field.
     *
     * @param string[]|null $value
     */
    public function states(?array $value): self
    {
        $this->instance->setStates($value);
        return $this;
    }

    /**
     * Sets date field field.
     *
     * @param string|null $value
     */
    public function dateField(?string $value): self
    {
        $this->instance->setDateField($value);
        return $this;
    }

    /**
     * Sets start date field.
     *
     * @param \DateTime|null $value
     */
    public function startDate(?\DateTime $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     *
     * @param \DateTime|null $value
     */
    public function endDate(?\DateTime $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Sets start datetime field.
     *
     * @param \DateTime|null $value
     */
    public function startDatetime(?\DateTime $value): self
    {
        $this->instance->setStartDatetime($value);
        return $this;
    }

    /**
     * Sets end datetime field.
     *
     * @param \DateTime|null $value
     */
    public function endDatetime(?\DateTime $value): self
    {
        $this->instance->setEndDatetime($value);
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
     * Initializes a new Subscription Filter object.
     */
    public function build(): SubscriptionFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
