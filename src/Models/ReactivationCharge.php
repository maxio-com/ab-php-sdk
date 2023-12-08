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
 * You may choose how to handle the reactivation charge for that subscription: 1) `prorated` A prorated
 * charge for the product price will be attempted for to complete the period 2) `immediate` A full-
 * price charge for the product price will be attempted immediately 3) `delayed` A full-price charge
 * for the product price will be attempted at the next renewal
 */
class ReactivationCharge
{
    public const PRORATED = 'prorated';

    public const IMMEDIATE = 'immediate';

    public const DELAYED = 'delayed';

    private const _ALL_VALUES = [self::PRORATED, self::IMMEDIATE, self::DELAYED];

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
        throw new Exception("$value is invalid for ReactivationCharge.");
    }
}
