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

class ListCouponsFilter implements \JsonSerializable
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
     * @var int[]|null
     */
    private $ids;

    /**
     * @var string[]|null
     */
    private $codes;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var bool|null
     */
    private $includeArchived;

    /**
     * Returns Date Field.
     * The type of filter you would like to apply to your search. Use in query
     * `filter[date_field]=created_at`.
     */
    public function getDateField(): ?string
    {
        return $this->dateField;
    }

    /**
     * Sets Date Field.
     * The type of filter you would like to apply to your search. Use in query
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
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns coupons with a
     * timestamp at or after midnight (12:00:00 AM) in your site’s time zone on the date specified. Use in
     * query `filter[start_date]=2011-12-17`.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * The start date (format YYYY-MM-DD) with which to filter the date_field. Returns coupons with a
     * timestamp at or after midnight (12:00:00 AM) in your site’s time zone on the date specified. Use in
     * query `filter[start_date]=2011-12-17`.
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
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns coupons with a
     * timestamp up to and including 11:59:59PM in your site’s time zone on the date specified. Use in
     * query `filter[end_date]=2011-12-15`.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * The end date (format YYYY-MM-DD) with which to filter the date_field. Returns coupons with a
     * timestamp up to and including 11:59:59PM in your site’s time zone on the date specified. Use in
     * query `filter[end_date]=2011-12-15`.
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
     * coupons with a timestamp at or after exact time provided in query. You can specify timezone in query
     * - otherwise your site's time zone will be used. If provided, this parameter will be used instead of
     * start_date. Use in query `filter[start_datetime]=2011-12-19T10:15:30+01:00`.
     */
    public function getStartDatetime(): ?\DateTime
    {
        return $this->startDatetime;
    }

    /**
     * Sets Start Datetime.
     * The start date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * coupons with a timestamp at or after exact time provided in query. You can specify timezone in query
     * - otherwise your site's time zone will be used. If provided, this parameter will be used instead of
     * start_date. Use in query `filter[start_datetime]=2011-12-19T10:15:30+01:00`.
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
     * coupons with a timestamp at or before exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of end_date. Use in query `filter[end_datetime]=2011-12-1T10:15:30+01:00`.
     */
    public function getEndDatetime(): ?\DateTime
    {
        return $this->endDatetime;
    }

    /**
     * Sets End Datetime.
     * The end date and time (format YYYY-MM-DD HH:MM:SS) with which to filter the date_field. Returns
     * coupons with a timestamp at or before exact time provided in query. You can specify timezone in
     * query - otherwise your site's time zone will be used. If provided, this parameter will be used
     * instead of end_date. Use in query `filter[end_datetime]=2011-12-1T10:15:30+01:00`.
     *
     * @maps end_datetime
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndDatetime(?\DateTime $endDatetime): void
    {
        $this->endDatetime = $endDatetime;
    }

    /**
     * Returns Ids.
     * Allows fetching coupons with matching id based on provided values. Use in query `filter[ids]=1,2,3`.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     * Allows fetching coupons with matching id based on provided values. Use in query `filter[ids]=1,2,3`.
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
     * Returns Codes.
     * Allows fetching coupons with matching codes based on provided values. Use in query
     * `filter[codes]=free,free_trial`.
     *
     * @return string[]|null
     */
    public function getCodes(): ?array
    {
        return $this->codes;
    }

    /**
     * Sets Codes.
     * Allows fetching coupons with matching codes based on provided values. Use in query
     * `filter[codes]=free,free_trial`.
     *
     * @maps codes
     *
     * @param string[]|null $codes
     */
    public function setCodes(?array $codes): void
    {
        $this->codes = $codes;
    }

    /**
     * Returns Use Site Exchange Rate.
     * If true, restricts the list to coupons whose pricing is recalculated from the site’s current
     * exchange rates, so their currency_prices array contains on-the-fly conversions rather than stored
     * price records. If false, restricts the list to coupons that have manually defined amounts for each
     * currency, ensuring the response includes the saved currency_prices entries instead of exchange-rate-
     * derived values. Use in query `filter[use_site_exchange_rate]=true`.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * If true, restricts the list to coupons whose pricing is recalculated from the site’s current
     * exchange rates, so their currency_prices array contains on-the-fly conversions rather than stored
     * price records. If false, restricts the list to coupons that have manually defined amounts for each
     * currency, ensuring the response includes the saved currency_prices entries instead of exchange-rate-
     * derived values. Use in query `filter[use_site_exchange_rate]=true`.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Include Archived.
     * Controls returning archived coupons.
     */
    public function getIncludeArchived(): ?bool
    {
        return $this->includeArchived;
    }

    /**
     * Sets Include Archived.
     * Controls returning archived coupons.
     *
     * @maps include_archived
     */
    public function setIncludeArchived(?bool $includeArchived): void
    {
        $this->includeArchived = $includeArchived;
    }

    /**
     * Converts the ListCouponsFilter object to a human-readable string representation.
     *
     * @return string The string representation of the ListCouponsFilter object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListCouponsFilter',
            [
                'dateField' => $this->dateField,
                'startDate' => $this->startDate,
                'endDate' => $this->endDate,
                'startDatetime' => $this->startDatetime,
                'endDatetime' => $this->endDatetime,
                'ids' => $this->ids,
                'codes' => $this->codes,
                'useSiteExchangeRate' => $this->useSiteExchangeRate,
                'includeArchived' => $this->includeArchived,
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
            $json['date_field']             = BasicDateField::checkValue($this->dateField);
        }
        if (isset($this->startDate)) {
            $json['start_date']             = DateTimeHelper::toSimpleDate($this->startDate);
        }
        if (isset($this->endDate)) {
            $json['end_date']               = DateTimeHelper::toSimpleDate($this->endDate);
        }
        if (isset($this->startDatetime)) {
            $json['start_datetime']         = DateTimeHelper::toRfc3339DateTime($this->startDatetime);
        }
        if (isset($this->endDatetime)) {
            $json['end_datetime']           = DateTimeHelper::toRfc3339DateTime($this->endDatetime);
        }
        if (isset($this->ids)) {
            $json['ids']                    = $this->ids;
        }
        if (isset($this->codes)) {
            $json['codes']                  = $this->codes;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate'] = $this->useSiteExchangeRate;
        }
        if (isset($this->includeArchived)) {
            $json['include_archived']       = $this->includeArchived;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
