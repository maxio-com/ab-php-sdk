<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
 */
class ItemCategory
{
    public const ENUM_BUSINESS_SOFTWARE = 'Business Software';

    public const ENUM_CONSUMER_SOFTWARE = 'Consumer Software';

    public const ENUM_DIGITAL_SERVICES = 'Digital Services';

    public const ENUM_PHYSICAL_GOODS = 'Physical Goods';

    public const OTHER = 'Other';

    private const _ALL_VALUES = [
        self::ENUM_BUSINESS_SOFTWARE,
        self::ENUM_CONSUMER_SOFTWARE,
        self::ENUM_DIGITAL_SERVICES,
        self::ENUM_PHYSICAL_GOODS,
        self::OTHER
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for ItemCategory.");
    }
}
