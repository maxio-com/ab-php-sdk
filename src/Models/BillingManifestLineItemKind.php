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
 * A handle for the billing manifest line item kind
 */
class BillingManifestLineItemKind
{
    public const BASELINE = 'baseline';

    public const INITIAL = 'initial';

    public const TRIAL = 'trial';

    public const COUPON = 'coupon';

    public const COMPONENT = 'component';

    public const TAX = 'tax';

    private const _ALL_VALUES = [self::BASELINE, self::INITIAL, self::TRIAL, self::COUPON, self::COMPONENT, self::TAX];

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
        throw new Exception("$value is invalid for BillingManifestLineItemKind.");
    }
}
