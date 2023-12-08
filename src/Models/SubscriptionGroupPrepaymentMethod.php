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

class SubscriptionGroupPrepaymentMethod
{
    public const CHECK = 'check';

    public const CASH = 'cash';

    public const MONEY_ORDER = 'money_order';

    public const ACH = 'ach';

    public const PAYPAL_ACCOUNT = 'paypal_account';

    public const OTHER = 'other';

    private const _ALL_VALUES =
        [self::CHECK, self::CASH, self::MONEY_ORDER, self::ACH, self::PAYPAL_ACCOUNT, self::OTHER];

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
        throw new Exception("$value is invalid for SubscriptionGroupPrepaymentMethod.");
    }
}
