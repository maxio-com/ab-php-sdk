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

/**
 * Nested filter used for List Subscription Components For Site Filter
 */
class SubscriptionFilter implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $states;

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
     * @var \DateTime|null
     */
    private $startDatetime;

    /**
     * @var \DateTime|null
     */
    private $endDatetime;

    /**
     * Returns States.
     * Allows fetching components allocations that belong to the subscription with matching states based on
     * provided values. To use this filter you also have to include the following param in the request
     * `include=subscription`. Use in query `filter[subscription][states]=active,
     * canceled&include=subscription`.
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->states;
    }

    /**
     * Sets States.
     * Allows fetching components allocations that belong to the subscription with matching states based on
     * provided values. To use this filter you also have to include the following param in the request
     * `include=subscription`. Use in query `filter[subscription][states]=active,
     * canceled&include=subscription`.
     *
     * @maps states
     * @factory \AdvancedBillingLib\Models\SubscriptionStateFilter::checkValue
     *
     * @param string[]|null $states
     */
    public function setStates(?array $states): void
    {
        $this->states = $states;
    }

    /**
     * Returns Date Field.
     * The type of filter you'd like to apply to your search. To use this filter you also have to include
     * the following param in the request `include=subscription`.
     */
    public function getDateField(): ?string
    {
        return $this->dateField;
    }

    /**
     * Sets Date Field.
     * The type of filter you'd like to apply to your search. To use this filter you also have to include
     * the following param in the request `include=subscription`.
     *
     * @maps date_field
     * @factory \AdvancedBillingLib\Models\SubscriptionListDateField::checkValue
     */
    public function setDateField(?string $dateField): void
    {
        $this->dateField = $dateField;
    }

    /**
     * Returns Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns components that
     * belong to the subscription with a timestamp at or after midnight (12:00:00 AM) in your site’s time
     * zone on the date specified. To use this filter you also have to include the following param in the
     * request `include=subscription`.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns components that
     * belong to the subscription with a timestamp at or after midnight (12:00:00 AM) in your site’s time
     * zone on the date specified. To use this filter you also have to include the following param in the
     * request `include=subscription`.
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
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns components that belong
     * to the subscription with a timestamp up to and including 11:59:59PM in your site’s time zone on the
     * date specified. To use this filter you also have to include the following param in the request
     * `include=subscription`.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns components that belong
     * to the subscription with a timestamp up to and including 11:59:59PM in your site’s time zone on the
     * date specified. To use this filter you also have to include the following param in the request
     * `include=subscription`.
     *
     * @maps end_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(?\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Start Datetime.
     * The start date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * components that belong to the subscription with a timestamp at or after exact time provided in query.
     * You can specify timezone in query - otherwise your site''s time zone will be used. If provided,
     * this parameter will be used instead of start_date. To use this filter you also have to include the
     * following param in the request `include=subscription`.
     */
    public function getStartDatetime(): ?\DateTime
    {
        return $this->startDatetime;
    }

    /**
     * Sets Start Datetime.
     * The start date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * components that belong to the subscription with a timestamp at or after exact time provided in query.
     * You can specify timezone in query - otherwise your site''s time zone will be used. If provided,
     * this parameter will be used instead of start_date. To use this filter you also have to include the
     * following param in the request `include=subscription`.
     *
     * @maps start_datetime
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setStartDatetime(?\DateTime $startDatetime): void
    {
        $this->startDatetime = $startDatetime;
    }

    /**
     * Returns End Datetime.
     * The end date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * components that belong to the subscription with a timestamp at or before exact time provided in
     * query. You can specify timezone in query - otherwise your site''s time zone will be used. If
     * provided, this parameter will be used instead of end_date. To use this filter you also have to
     * include the following param in the request `include=subscription`.
     */
    public function getEndDatetime(): ?\DateTime
    {
        return $this->endDatetime;
    }

    /**
     * Sets End Datetime.
     * The end date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * components that belong to the subscription with a timestamp at or before exact time provided in
     * query. You can specify timezone in query - otherwise your site''s time zone will be used. If
     * provided, this parameter will be used instead of end_date. To use this filter you also have to
     * include the following param in the request `include=subscription`.
     *
     * @maps end_datetime
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndDatetime(?\DateTime $endDatetime): void
    {
        $this->endDatetime = $endDatetime;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->states)) {
            $json['states']         = SubscriptionStateFilter::checkValue($this->states);
        }
        if (isset($this->dateField)) {
            $json['date_field']     = SubscriptionListDateField::checkValue($this->dateField);
        }
        if (isset($this->startDate)) {
            $json['start_date']     = DateTimeHelper::toSimpleDate($this->startDate);
        }
        if (isset($this->endDate)) {
            $json['end_date']       = DateTimeHelper::toSimpleDate($this->endDate);
        }
        if (isset($this->startDatetime)) {
            $json['start_datetime'] = DateTimeHelper::toRfc3339DateTime($this->startDatetime);
        }
        if (isset($this->endDatetime)) {
            $json['end_datetime']   = DateTimeHelper::toRfc3339DateTime($this->endDatetime);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
