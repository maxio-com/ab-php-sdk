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
 * The process used to cancel the subscription, if the subscription has been canceled. It is nil if the
 * subscription's state is not canceled.
 */
class CancellationMethod
{
    public const MERCHANT_UI = 'merchant_ui';

    public const MERCHANT_API = 'merchant_api';

    public const DUNNING = 'dunning';

    public const BILLING_PORTAL = 'billing_portal';

    private const _ALL_VALUES = [self::MERCHANT_UI, self::MERCHANT_API, self::DUNNING, self::BILLING_PORTAL];

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
        throw new Exception("$value is invalid for CancellationMethod.");
    }
}
