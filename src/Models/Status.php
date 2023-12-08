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
 * The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-
 * us/articles/4407737494171#line-item-breakdowns) for more.
 */
class Status
{
    public const DRAFT = 'draft';

    public const OPEN = 'open';

    public const PAID = 'paid';

    public const PENDING = 'pending';

    public const VOIDED = 'voided';

    public const CANCELED = 'canceled';

    private const _ALL_VALUES = [self::DRAFT, self::OPEN, self::PAID, self::PENDING, self::VOIDED, self::CANCELED];

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
        throw new Exception("$value is invalid for Status.");
    }
}
