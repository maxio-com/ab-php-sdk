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
 * A handle for the line item transaction type
 */
class LineItemTransactionType
{
    public const CHARGE = 'charge';

    public const CREDIT = 'credit';

    public const ADJUSTMENT = 'adjustment';

    public const PAYMENT = 'payment';

    public const REFUND = 'refund';

    public const INFO_TRANSACTION = 'info_transaction';

    public const PAYMENT_AUTHORIZATION = 'payment_authorization';

    private const _ALL_VALUES = [
        self::CHARGE,
        self::CREDIT,
        self::ADJUSTMENT,
        self::PAYMENT,
        self::REFUND,
        self::INFO_TRANSACTION,
        self::PAYMENT_AUTHORIZATION
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
        throw new Exception("$value is invalid for LineItemTransactionType.");
    }
}
