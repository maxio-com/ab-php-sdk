<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListCouponsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListCouponsFilter
 *
 * @see ListCouponsFilter
 */
class ListCouponsFilterBuilder
{
    /**
     * @var ListCouponsFilter
     */
    private $instance;

    private function __construct(ListCouponsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Coupons Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListCouponsFilter());
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
     * Sets ids field.
     *
     * @param int[]|null $value
     */
    public function ids(?array $value): self
    {
        $this->instance->setIds($value);
        return $this;
    }

    /**
     * Sets codes field.
     *
     * @param string[]|null $value
     */
    public function codes(?array $value): self
    {
        $this->instance->setCodes($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
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
     * Initializes a new List Coupons Filter object.
     */
    public function build(): ListCouponsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
