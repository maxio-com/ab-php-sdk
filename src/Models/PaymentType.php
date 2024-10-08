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

class PaymentType
{
    public const CREDIT_CARD = 'credit_card';

    public const BANK_ACCOUNT = 'bank_account';

    public const PAYPAL_ACCOUNT = 'paypal_account';

    public const APPLE_PAY = 'apple_pay';

    private const _ALL_VALUES = [self::CREDIT_CARD, self::BANK_ACCOUNT, self::PAYPAL_ACCOUNT, self::APPLE_PAY];

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
        throw new Exception("$value is invalid for PaymentType.");
    }
}
