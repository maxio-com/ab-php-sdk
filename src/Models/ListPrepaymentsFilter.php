<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ListPrepaymentsFilter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $dateField;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    /**
     * Returns Date Field.
     * The type of filter you would like to apply to your search. `created_at` - Time when prepayment was
     * created. `application_at` - Time when prepayment was applied to invoice. Use in query
     * `filter[date_field]=created_at`.
     */
    public function getDateField(): ?string
    {
        return $this->dateField;
    }

    /**
     * Sets Date Field.
     * The type of filter you would like to apply to your search. `created_at` - Time when prepayment was
     * created. `application_at` - Time when prepayment was applied to invoice. Use in query
     * `filter[date_field]=created_at`.
     *
     * @maps date_field
     * @factory \AdvancedBillingLib\Models\ListPrepaymentDateField::checkValue
     */
    public function setDateField(?string $dateField): void
    {
        $this->dateField = $dateField;
    }

    /**
     * Returns Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns prepayments with a
     * timestamp at or after midnight (12:00:00 AM) in your site's time zone on the date specified. Use in
     * query: `filter[start_date]=2011-12-15`.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns prepayments with a
     * timestamp at or after midnight (12:00:00 AM) in your site's time zone on the date specified. Use in
     * query: `filter[start_date]=2011-12-15`.
     *
     * @maps start_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartDate(?\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns prepayments with a
     * timestamp up to and including 11:59:59PM in your site's time zone on the date specified. Use in
     * query: `filter[end_date]=2011-12-15`.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns prepayments with a
     * timestamp up to and including 11:59:59PM in your site's time zone on the date specified. Use in
     * query: `filter[end_date]=2011-12-15`.
     *
     * @maps end_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(?\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->dateField)) {
            $json['date_field'] = ListPrepaymentDateField::checkValue($this->dateField);
        }
        if (isset($this->startDate)) {
            $json['start_date'] = DateTimeHelper::toSimpleDate($this->startDate);
        }
        if (isset($this->endDate)) {
            $json['end_date']   = DateTimeHelper::toSimpleDate($this->endDate);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
