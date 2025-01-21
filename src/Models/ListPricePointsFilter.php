<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ListPricePointsFilter implements \JsonSerializable
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
     * @var \DateTime|null
     */
    private $startDatetime;

    /**
     * @var \DateTime|null
     */
    private $endDatetime;

    /**
     * @var string[]|null
     */
    private $type;

    /**
     * @var int[]|null
     */
    private $ids;

    /**
     * @var string|null
     */
    private $archivedAt;

    /**
     * Returns Date Field.
     * The type of filter you would like to apply to your search. Use in query:
     * `filter[date_field]=created_at`.
     */
    public function getDateField(): ?string
    {
        return $this->dateField;
    }

    /**
     * Sets Date Field.
     * The type of filter you would like to apply to your search. Use in query:
     * `filter[date_field]=created_at`.
     *
     * @maps date_field
     * @factory \AdvancedBillingLib\Models\BasicDateField::checkValue
     */
    public function setDateField(?string $dateField): void
    {
        $this->dateField = $dateField;
    }

    /**
     * Returns Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns price points with a
     * timestamp at or after midnight (12:00:00 AM) in your site’s time zone on the date specified.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns price points with a
     * timestamp at or after midnight (12:00:00 AM) in your site’s time zone on the date specified.
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
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns price points with a
     * timestamp up to and including 11:59:59PM in your site’s time zone on the date specified.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns price points with a
     * timestamp up to and including 11:59:59PM in your site’s time zone on the date specified.
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
     * price points with a timestamp at or after exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of start_date.
     */
    public function getStartDatetime(): ?\DateTime
    {
        return $this->startDatetime;
    }

    /**
     * Sets Start Datetime.
     * The start date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * price points with a timestamp at or after exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of start_date.
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
     * price points with a timestamp at or before exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of end_date.
     */
    public function getEndDatetime(): ?\DateTime
    {
        return $this->endDatetime;
    }

    /**
     * Sets End Datetime.
     * The end date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * price points with a timestamp at or before exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of end_date.
     *
     * @maps end_datetime
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndDatetime(?\DateTime $endDatetime): void
    {
        $this->endDatetime = $endDatetime;
    }

    /**
     * Returns Type.
     * Allows fetching price points with matching type. Use in query: `filter[type]=custom,catalog`.
     *
     * @return string[]|null
     */
    public function getType(): ?array
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Allows fetching price points with matching type. Use in query: `filter[type]=custom,catalog`.
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue
     *
     * @param string[]|null $type
     */
    public function setType(?array $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Ids.
     * Allows fetching price points with matching id based on provided values. Use in query: `filter[ids]=1,
     * 2,3`.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     * Allows fetching price points with matching id based on provided values. Use in query: `filter[ids]=1,
     * 2,3`.
     *
     * @maps ids
     *
     * @param int[]|null $ids
     */
    public function setIds(?array $ids): void
    {
        $this->ids = $ids;
    }

    /**
     * Returns Archived At.
     * Allows fetching price points only if archived_at is present or not. Use in query:
     * `filter[archived_at]=not_null`.
     */
    public function getArchivedAt(): ?string
    {
        return $this->archivedAt;
    }

    /**
     * Sets Archived At.
     * Allows fetching price points only if archived_at is present or not. Use in query:
     * `filter[archived_at]=not_null`.
     *
     * @maps archived_at
     * @factory \AdvancedBillingLib\Models\IncludeNullOrNotNull::checkValue
     */
    public function setArchivedAt(?string $archivedAt): void
    {
        $this->archivedAt = $archivedAt;
    }

    /**
     * Converts the ListPricePointsFilter object to a human-readable string representation.
     *
     * @return string The string representation of the ListPricePointsFilter object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListPricePointsFilter',
            [
                'dateField' => $this->dateField,
                'startDate' => $this->startDate,
                'endDate' => $this->endDate,
                'startDatetime' => $this->startDatetime,
                'endDatetime' => $this->endDatetime,
                'type' => $this->type,
                'ids' => $this->ids,
                'archivedAt' => $this->archivedAt,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
            $json['date_field']     = BasicDateField::checkValue($this->dateField);
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
        if (isset($this->type)) {
            $json['type']           = PricePointType::checkValue($this->type);
        }
        if (isset($this->ids)) {
            $json['ids']            = $this->ids;
        }
        if (isset($this->archivedAt)) {
            $json['archived_at']    = IncludeNullOrNotNull::checkValue($this->archivedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
