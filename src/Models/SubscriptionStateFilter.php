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
 * Allowed values for filtering by the current state of the subscription.
 */
class SubscriptionStateFilter
{
    public const ACTIVE = 'active';

    public const CANCELED = 'canceled';

    public const EXPIRED = 'expired';

    public const EXPIRED_CARDS = 'expired_cards';

    public const ON_HOLD = 'on_hold';

    public const PAST_DUE = 'past_due';

    public const PENDING_CANCELLATION = 'pending_cancellation';

    public const PENDING_RENEWAL = 'pending_renewal';

    public const SUSPENDED = 'suspended';

    public const TRIAL_ENDED = 'trial_ended';

    public const TRIALING = 'trialing';

    public const UNPAID = 'unpaid';

    private const _ALL_VALUES = [
        self::ACTIVE,
        self::CANCELED,
        self::EXPIRED,
        self::EXPIRED_CARDS,
        self::ON_HOLD,
        self::PAST_DUE,
        self::PENDING_CANCELLATION,
        self::PENDING_RENEWAL,
        self::SUSPENDED,
        self::TRIAL_ENDED,
        self::TRIALING,
        self::UNPAID
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
        throw new Exception("$value is invalid for SubscriptionStateFilter.");
    }
}
