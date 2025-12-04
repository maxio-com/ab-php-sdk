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

class SnapDay
{
    public const END = 'end';

    private const _ALL_VALUES = [self::END];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string|int $value Value or a list/map of values to be checked
     *
     * @return array|null|string|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        
        // If value is a numeric string (1-28), convert it to an integer
        // This handles cases where the API returns numeric snap_day as a string
        if (is_string($value) && is_numeric($value)) {
            $numericValue = (int)$value;
            if ($numericValue >= 1 && $numericValue <= 28) {
                return $numericValue;
            }
        }
        
        // Check if it's a valid enum value (e.g., "end")
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        
        // For integer values (1-28), pass them through
        if (is_int($value) && $value >= 1 && $value <= 28) {
            return $value;
        }
        
        throw new Exception("$value is invalid for SnapDay.");
    }
}
