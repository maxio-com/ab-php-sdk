<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Utils;

use Core\Utils\DateHelper;
use DateTime;
use Exception;
use stdClass;

class DateTimeHelper
{
    /**
     * Convert a DateTime object to a string in simple date format
     *
     * @param DateTime|null $date The DateTime object to convert
     *
     * @return string|null The datetime as a string in simple date format
     * @throws Exception
     */
    public static function toSimpleDate(?DateTime $date): ?string
    {
        return DateHelper::toSimpleDate($date);
    }

    /**
     * Convert an array of DateTime objects to an array of strings in simple date format
     *
     * @param array|null $dates The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in simple date format
     */
    public static function toSimpleDateArray(?array $dates): ?array
    {
        return DateHelper::toSimpleDateArray($dates);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in simple date format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in simple date format
     */
    public static function toSimpleDate2DArray(?array $dates): ?array
    {
        return DateHelper::toSimpleDate2DArray($dates);
    }

    /**
     * Parse a datetime string in simple date format to a DateTime object
     *
     * @param string|null $date A datetime string in simple date format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromSimpleDate(?string $date): ?DateTime
    {
        return DateHelper::fromSimpleDate($date);
    }

    /**
     * Parse a datetime string in simple date format to a DateTime object
     *
     * @param string|null $date A datetime string in simple date format
     *
     * @return DateTime The parsed DateTime object
     * @throws Exception
     */
    public static function fromSimpleDateRequired(?string $date): DateTime
    {
        return DateHelper::fromSimpleDateRequired($date);
    }

    /**
     * Parse an array of datetime strings in simple date format to an array of DateTime objects
     *
     * @param array|null $dates An array of datetime strings in simple date format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSimpleDateArray(?array $dates): ?array
    {
        return DateHelper::fromSimpleDateArray($dates);
    }

    /**
     * Parse an array of map of datetime strings in simple date format to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in simple date format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromSimpleDateArrayOfMap(?array $dates): ?array
    {
        return DateHelper::fromSimpleDateArrayOfMap($dates);
    }

    /**
     * Parse a class of datetime strings in simple date format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in simple date format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromSimpleDateMap(?stdClass $datetimes): ?array
    {
        return DateHelper::fromSimpleDateMap($datetimes);
    }

    /**
     * Parse a map of array of datetime strings in simple date format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in simple date format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromSimpleDateMapOfArray(?stdClass $dates): ?array
    {
        return DateHelper::fromSimpleDateMapOfArray($dates);
    }

    /**
     * Convert a DateTime object to a string in Rfc1123 format
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return string|null The datetime as a string in Rfc1123 format
     * @throws Exception
     */
    public static function toRfc1123DateTime(?DateTime $datetime): ?string
    {
        return DateHelper::toRfc1123DateTime($datetime);
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc1123 format
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in Rfc1123 format
     */
    public static function toRfc1123DateTimeArray(?array $datetimes): ?array
    {
        return DateHelper::toRfc1123DateTimeArray($datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in Rfc1123 format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in Rfc1123 format
     */
    public static function toRfc1123DateTime2DArray(?array $dates): ?array
    {
        return DateHelper::toRfc1123DateTime2DArray($dates);
    }

    /**
     * Parse a datetime string in Rfc1123 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc1123 format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc1123DateTime(?string $datetime): ?DateTime
    {
        return DateHelper::fromRfc1123DateTime($datetime);
    }

    /**
     * Parse a datetime string in Rfc1123 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc1123 format
     *
     * @return DateTime The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc1123DateTimeRequired(?string $datetime): DateTime
    {
        return DateHelper::fromRfc1123DateTimeRequired($datetime);
    }

    /**
     * Parse an array of datetime strings in Rfc1123 format to an array of DateTime objects
     *
     * @param array|null $datetimes An array of datetime strings in Rfc1123 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeArray(?array $datetimes): ?array
    {
        return DateHelper::fromRfc1123DateTimeArray($datetimes);
    }

    /**
     * Parse an array of map of datetime strings in Rfc1123 format to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in Rfc1123 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeArrayOfMap(?array $dates): ?array
    {
        return DateHelper::fromRfc1123DateTimeArrayOfMap($dates);
    }

    /**
     * Parse a class of datetime strings in Rfc1123 format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in Rfc1123 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeMap(?stdClass $datetimes): ?array
    {
        return DateHelper::fromRfc1123DateTimeMap($datetimes);
    }

    /**
     * Parse a map of array of datetime strings in Rfc1123 format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in Rfc1123 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc1123DateTimeMapOfArray(?stdClass $dates): ?array
    {
        return DateHelper::fromRfc1123DateTimeMapOfArray($dates);
    }

    /**
     * Convert a DateTime object to a string in Rfc3339 format
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return string|null The datetime as a string in Rfc3339 format
     * @throws Exception
     */
    public static function toRfc3339DateTime(?DateTime $datetime): ?string
    {
        return DateHelper::toRfc3339DateTime($datetime);
    }

    /**
     * Convert an array of DateTime objects to an array of strings in Rfc3339 format
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of datetime strings in Rfc3339 format
     */
    public static function toRfc3339DateTimeArray(?array $datetimes): ?array
    {
        return DateHelper::toRfc3339DateTimeArray($datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of strings in Rfc3339 format
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of datetime strings in Rfc3339 format
     */
    public static function toRfc3339DateTime2DArray(?array $dates): ?array
    {
        return DateHelper::toRfc3339DateTime2DArray($dates);
    }

    /**
     * Parse a datetime string in Rfc3339 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc3339 format
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc3339DateTime(?string $datetime): ?DateTime
    {
        return DateHelper::fromRfc3339DateTime($datetime);
    }

    /**
     * Parse a datetime string in Rfc3339 format to a DateTime object
     *
     * @param string|null $datetime A datetime string in Rfc3339 format
     *
     * @return DateTime The parsed DateTime object
     * @throws Exception
     */
    public static function fromRfc3339DateTimeRequired(?string $datetime): DateTime
    {
        return DateHelper::fromRfc3339DateTimeRequired($datetime);
    }

    /**
     * Parse an array of datetime strings in Rfc3339 format to an array of DateTime objects
     *
     * @param array|null $datetimes An array of datetime strings in Rfc3339 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeArray(?array $datetimes): ?array
    {
        return DateHelper::fromRfc3339DateTimeArray($datetimes);
    }

    /**
     * Parse an array of map of datetime strings in Rfc3339 format to a 2D array DateTime objects
     *
     * @param array|null $dates An array of map of datetime strings in Rfc3339 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeArrayOfMap(?array $dates): ?array
    {
        return DateHelper::fromRfc3339DateTimeArrayOfMap($dates);
    }

    /**
     * Parse a class of datetime strings in Rfc3339 format to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of datetime strings in Rfc3339 format
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeMap(?stdClass $datetimes): ?array
    {
        return DateHelper::fromRfc3339DateTimeMap($datetimes);
    }

    /**
     * Parse a map of array of datetime strings in Rfc3339 format to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of datetime strings in Rfc3339 format
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromRfc3339DateTimeMapOfArray(?stdClass $dates): ?array
    {
        return DateHelper::fromRfc3339DateTimeMapOfArray($dates);
    }

    /**
     * Convert a DateTime object to a Unix Timestamp
     *
     * @param DateTime|null $datetime The DateTime object to convert
     *
     * @return int|null The converted Unix Timestamp
     * @throws Exception
     */
    public static function toUnixTimestamp(?DateTime $datetime): ?int
    {
        return DateHelper::toUnixTimestamp($datetime);
    }

    /**
     * Convert an array of DateTime objects to an array of Unix timestamps
     *
     * @param array|null $datetimes The array of DateTime objects to convert
     *
     * @return array|null The array of integers representing date-time in Unix timestamp
     */
    public static function toUnixTimestampArray(?array $datetimes): ?array
    {
        return DateHelper::toUnixTimestampArray($datetimes);
    }

    /**
     * Convert a 2D array of DateTime objects to a 2D array of Unix timestamps
     *
     * @param array|null $dates The 2D array of DateTime objects to convert
     *
     * @return array|null The 2D array of integers representing date-time in Unix timestamp
     */
    public static function toUnixTimestamp2DArray(?array $dates): ?array
    {
        return DateHelper::toUnixTimestamp2DArray($dates);
    }

    /**
     * Parse a Unix Timestamp to a DateTime object
     *
     * @param string|null $datetime The Unix Timestamp
     *
     * @return DateTime|null The parsed DateTime object
     * @throws Exception
     */
    public static function fromUnixTimestamp(?string $datetime): ?DateTime
    {
        return DateHelper::fromUnixTimestamp($datetime);
    }

    /**
     * Parse a Unix Timestamp to a DateTime object
     *
     * @param string|null $datetime The Unix Timestamp
     *
     * @return DateTime The parsed DateTime object
     * @throws Exception
     */
    public static function fromUnixTimestampRequired(?string $datetime): DateTime
    {
        return DateHelper::fromUnixTimestampRequired($datetime);
    }

    /**
     * Parse an array of Unix Timestamps to an array of DateTime objects
     *
     * @param array|null $datetimes An array of Unix Timestamps
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromUnixTimestampArray(?array $datetimes): ?array
    {
        return DateHelper::fromUnixTimestampArray($datetimes);
    }

    /**
     * Parse an array of map of Unix Timestamps to a 2D array of DateTime objects
     *
     * @param array|null $dates An array of map of Unix Timestamps
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromUnixTimestampArrayOfMap(?array $dates): ?array
    {
        return DateHelper::fromUnixTimestampArrayOfMap($dates);
    }

    /**
     * Parse a class of Unix Timestamps to an array of DateTime objects
     *
     * @param stdClass|null $datetimes A class of Unix Timestamps
     *
     * @return array|null An array of parsed DateTime objects
     */
    public static function fromUnixTimestampMap(?stdClass $datetimes): ?array
    {
        return DateHelper::fromUnixTimestampMap($datetimes);
    }

    /**
     * Parse a map of array of Unix Timestamps to a 2D array of DateTime objects
     *
     * @param stdClass|null $dates A map of array of Unix Timestamps
     *
     * @return array|null A 2D array of parsed DateTime objects
     */
    public static function fromUnixTimestampMapOfArray(?stdClass $dates): ?array
    {
        return DateHelper::fromUnixTimestampMapOfArray($dates);
    }
}
