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

class InvoiceSortField
{
    public const STATUS = 'status';

    public const TOTAL_AMOUNT = 'total_amount';

    public const DUE_AMOUNT = 'due_amount';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const ISSUE_DATE = 'issue_date';

    public const DUE_DATE = 'due_date';

    public const NUMBER = 'number';

    private const _ALL_VALUES = [
        self::STATUS,
        self::TOTAL_AMOUNT,
        self::DUE_AMOUNT,
        self::CREATED_AT,
        self::UPDATED_AT,
        self::ISSUE_DATE,
        self::DUE_DATE,
        self::NUMBER
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
        throw new Exception("$value is invalid for InvoiceSortField.");
    }
}
