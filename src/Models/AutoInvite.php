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

class AutoInvite
{
    /**
     * Do not send the invitation email.
     */
    public const NO = 0;

    /**
     * Automatically send the invitation email.
     */
    public const YES = 1;

    private const _ALL_VALUES = [self::NO, self::YES];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for AutoInvite.");
    }
}
