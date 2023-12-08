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
 * Indicates how data should be added to the metafield. For example, a text type is just a string, so a
 * given metafield of this type can have any value attached. On the other hand, dropdown and radio have
 * a set of allowed values that can be input, and appear differently on a Public Signup Page.
 */
class MetafieldInput
{
    public const BALANCE_TRACKER = 'balance_tracker';

    public const TEXT = 'text';

    public const RADIO = 'radio';

    public const DROPDOWN = 'dropdown';

    private const _ALL_VALUES = [self::BALANCE_TRACKER, self::TEXT, self::RADIO, self::DROPDOWN];

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
        throw new Exception("$value is invalid for MetafieldInput.");
    }
}
