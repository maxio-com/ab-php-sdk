<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPricePointsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPricePointsFilter
 *
 * @see ListPricePointsFilter
 */
class ListPricePointsFilterBuilder
{
    /**
     * @var ListPricePointsFilter
     */
    private $instance;

    private function __construct(ListPricePointsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list price points filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPricePointsFilter());
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
     * Sets start datetime field.
     */
    public function startDatetime(?\DateTime $value): self
    {
        $this->instance->setStartDatetime($value);
        return $this;
    }

    /**
     * Sets end datetime field.
     */
    public function endDatetime(?\DateTime $value): self
    {
        $this->instance->setEndDatetime($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?array $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets ids field.
     */
    public function ids(?array $value): self
    {
        $this->instance->setIds($value);
        return $this;
    }

    /**
     * Sets archived at field.
     */
    public function archivedAt(?string $value): self
    {
        $this->instance->setArchivedAt($value);
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
     * Initializes a new list price points filter object.
     */
    public function build(): ListPricePointsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
