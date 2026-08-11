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

class QScope
{
    public const FULL_NAME = 'full_name';

    public const FIRST_NAME = 'first_name';

    public const LAST_NAME = 'last_name';

    public const ORGANIZATION = 'organization';

    public const CUSTOMER_REFERENCE = 'customer_reference';

    public const SUBSCRIPTION_REFERENCE = 'subscription_reference';

    public const LAST_FOUR = 'last_four';

    private const _ALL_VALUES = [
        self::FULL_NAME,
        self::FIRST_NAME,
        self::LAST_NAME,
        self::ORGANIZATION,
        self::CUSTOMER_REFERENCE,
        self::SUBSCRIPTION_REFERENCE,
        self::LAST_FOUR
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
        throw new Exception("$value is invalid for QScope.");
    }
}
