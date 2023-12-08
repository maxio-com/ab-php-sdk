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
 * Price point type. We expose the following types:
 * 1. **default**: a price point that is marked as a default price for a certain product.
 * 2. **custom**: a custom price point.
 * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
 * **not** a custom one.
 */
class PricePointType
{
    public const CATALOG = 'catalog';

    public const DEFAULT_ = 'default';

    public const CUSTOM = 'custom';

    private const _ALL_VALUES = [self::CATALOG, self::DEFAULT_, self::CUSTOM];

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
        throw new Exception("$value is invalid for PricePointType.");
    }
}
