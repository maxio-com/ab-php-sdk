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

class InvoiceDateField
{
    public const CREATED_AT = 'created_at';

    public const DUE_DATE = 'due_date';

    public const ISSUE_DATE = 'issue_date';

    public const UPDATED_AT = 'updated_at';

    public const PAID_DATE = 'paid_date';

    private const _ALL_VALUES =
        [self::CREATED_AT, self::DUE_DATE, self::ISSUE_DATE, self::UPDATED_AT, self::PAID_DATE];

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
        throw new Exception("$value is invalid for InvoiceDateField.");
    }
}
