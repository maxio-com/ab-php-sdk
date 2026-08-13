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

class SubscriptionListInclude
{
    public const SELF_SERVICE_PAGE_TOKEN = 'self_service_page_token';

    public const CURRENT_ACCOUNT_BALANCE_IN_CENTS = 'current_account_balance_in_cents';

    public const CURRENT_BILLING_AMOUNT = 'current_billing_amount';

    public const COUPONS = 'coupons';

    private const _ALL_VALUES = [
        self::SELF_SERVICE_PAGE_TOKEN,
        self::CURRENT_ACCOUNT_BALANCE_IN_CENTS,
        self::CURRENT_BILLING_AMOUNT,
        self::COUPONS
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
        throw new Exception("$value is invalid for SubscriptionListInclude.");
    }
}
