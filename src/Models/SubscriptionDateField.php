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

class SubscriptionDateField
{
    public const CURRENT_PERIOD_ENDS_AT = 'current_period_ends_at';

    public const CURRENT_PERIOD_STARTS_AT = 'current_period_starts_at';

    public const CREATED_AT = 'created_at';

    public const ACTIVATED_AT = 'activated_at';

    public const CANCELED_AT = 'canceled_at';

    public const EXPIRES_AT = 'expires_at';

    public const TRIAL_STARTED_AT = 'trial_started_at';

    public const TRIAL_ENDED_AT = 'trial_ended_at';

    public const UPDATED_AT = 'updated_at';

    private const _ALL_VALUES = [
        self::CURRENT_PERIOD_ENDS_AT,
        self::CURRENT_PERIOD_STARTS_AT,
        self::CREATED_AT,
        self::ACTIVATED_AT,
        self::CANCELED_AT,
        self::EXPIRES_AT,
        self::TRIAL_STARTED_AT,
        self::TRIAL_ENDED_AT,
        self::UPDATED_AT
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
        throw new Exception("$value is invalid for SubscriptionDateField.");
    }
}
