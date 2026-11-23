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
 * Set whenever `status` isn't `active`. Accompanying `stopped`: `entitlement_missing` (an ordinary
 * product or component change removed the entitlement), `wallet_archived` (the wallet was archived),
 * `subscription_terminated` (the subscription reached a terminal state; funding resumes if the
 * subscription returns to a granting state, for example on reactivation, without back-granting the
 * periods it missed), `feature_removed` (the subscription no longer has this Feature),
 * `wallet_behavior_disabled` (the Feature no longer has `wallet_behavior` configured),
 * `superseded_by_replacement` (a later entitlement now funds this wallet instead), or
 * `subscription_prepaid` (the subscription switched to prepaid, which cannot carry an active wallet).
 * Accompanying `erroring`: `allowance_not_representable` (the entitlement's current allowance doesn't
 * fit the wallet's amount encoding) or `balance_at_capacity` (granting it would push the balance past
 * the maximum supported value).
 */
class Reason
{
    public const ENTITLEMENT_MISSING = 'entitlement_missing';

    public const WALLET_ARCHIVED = 'wallet_archived';

    public const SUBSCRIPTION_TERMINATED = 'subscription_terminated';

    public const FEATURE_REMOVED = 'feature_removed';

    public const WALLET_BEHAVIOR_DISABLED = 'wallet_behavior_disabled';

    public const SUPERSEDED_BY_REPLACEMENT = 'superseded_by_replacement';

    public const SUBSCRIPTION_PREPAID = 'subscription_prepaid';

    public const ALLOWANCE_NOT_REPRESENTABLE = 'allowance_not_representable';

    public const BALANCE_AT_CAPACITY = 'balance_at_capacity';

    private const _ALL_VALUES = [
        self::ENTITLEMENT_MISSING,
        self::WALLET_ARCHIVED,
        self::SUBSCRIPTION_TERMINATED,
        self::FEATURE_REMOVED,
        self::WALLET_BEHAVIOR_DISABLED,
        self::SUPERSEDED_BY_REPLACEMENT,
        self::SUBSCRIPTION_PREPAID,
        self::ALLOWANCE_NOT_REPRESENTABLE,
        self::BALANCE_AT_CAPACITY
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
        throw new Exception("$value is invalid for Reason.");
    }
}
