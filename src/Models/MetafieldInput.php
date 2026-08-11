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
 * Indicates the type of metafield. A text metafield allows any string value. Dropdown and radio
 * metafields have a set of values that can be selected. Defaults to 'text'.
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
