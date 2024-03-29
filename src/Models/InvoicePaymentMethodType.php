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
 * The type of payment method used. Defaults to other.
 */
class InvoicePaymentMethodType
{
    public const CREDIT_CARD = 'credit_card';

    public const CHECK = 'check';

    public const CASH = 'cash';

    public const MONEY_ORDER = 'money_order';

    public const ACH = 'ach';

    public const OTHER = 'other';

    private const _ALL_VALUES =
        [self::CREDIT_CARD, self::CHECK, self::CASH, self::MONEY_ORDER, self::ACH, self::OTHER];

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
        throw new Exception("$value is invalid for InvoicePaymentMethodType.");
    }
}
