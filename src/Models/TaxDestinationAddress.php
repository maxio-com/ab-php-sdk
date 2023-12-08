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

class TaxDestinationAddress
{
    public const SHIPPING_THEN_BILLING = 'shipping_then_billing';

    public const BILLING_THEN_SHIPPING = 'billing_then_shipping';

    public const SHIPPING_ONLY = 'shipping_only';

    public const BILLING_ONLY = 'billing_only';

    private const _ALL_VALUES =
        [self::SHIPPING_THEN_BILLING, self::BILLING_THEN_SHIPPING, self::SHIPPING_ONLY, self::BILLING_ONLY];

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
        throw new Exception("$value is invalid for TaxDestinationAddress.");
    }
}
