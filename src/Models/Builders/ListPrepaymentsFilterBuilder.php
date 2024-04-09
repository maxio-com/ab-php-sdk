<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPrepaymentsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPrepaymentsFilter
 *
 * @see ListPrepaymentsFilter
 */
class ListPrepaymentsFilterBuilder
{
    /**
     * @var ListPrepaymentsFilter
     */
    private $instance;

    private function __construct(ListPrepaymentsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list prepayments filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPrepaymentsFilter());
    }

    /**
     * Sets date field field.
     */
    public function dateField(?string $value): self
    {
        $this->instance->setDateField($value);
        return $this;
    }

    /**
     * Sets start date field.
     */
    public function startDate(?\DateTime $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?\DateTime $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
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
     * Initializes a new list prepayments filter object.
     */
    public function build(): ListPrepaymentsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
