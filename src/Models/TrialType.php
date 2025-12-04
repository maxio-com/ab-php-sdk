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
 * Indicates how a trial is handled when the trail period ends and there is no credit card on file. For
 * `no_obligation`, the subscription transitions to a Trial Ended state. Maxio will not send any emails
 * or statements. For `payment_expected`, the subscription transitions to a Past Due state. Maxio will
 * send normal dunning emails and statements according to your other settings.
 */
class TrialType
{
    public const NO_OBLIGATION = 'no_obligation';

    public const PAYMENT_EXPECTED = 'payment_expected';

    private const _ALL_VALUES = [self::NO_OBLIGATION, self::PAYMENT_EXPECTED];

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
        throw new Exception("$value is invalid for TrialType.");
    }
}
