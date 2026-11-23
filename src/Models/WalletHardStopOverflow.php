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
 * Behavior at the hard-stop boundary. `discard` drains the wallet to zero and rejects the excess (the
 * default). `allow_negative` deducts the full amount, letting the balance go negative. The excess past
 * the wallet's grants is booked as an overdraft ledger row with `grant_id` set to `null`.
 */
class WalletHardStopOverflow
{
    public const DISCARD = 'discard';

    public const ALLOW_NEGATIVE = 'allow_negative';

    private const _ALL_VALUES = [self::DISCARD, self::ALLOW_NEGATIVE];

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
        throw new Exception("$value is invalid for WalletHardStopOverflow.");
    }
}
