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

class SubscriptionSort
{
    public const SIGNUP_DATE = 'signup_date';

    public const PERIOD_START = 'period_start';

    public const PERIOD_END = 'period_end';

    public const NEXT_ASSESSMENT = 'next_assessment';

    public const UPDATED_AT = 'updated_at';

    public const CREATED_AT = 'created_at';

    private const _ALL_VALUES = [
        self::SIGNUP_DATE,
        self::PERIOD_START,
        self::PERIOD_END,
        self::NEXT_ASSESSMENT,
        self::UPDATED_AT,
        self::CREATED_AT
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
        throw new Exception("$value is invalid for SubscriptionSort.");
    }
}
