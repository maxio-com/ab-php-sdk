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
 * Identifies which kind of price point a feature catalog item override applies to: `ProductPricePoint`
 * for a product price point, `PricePoint` for a component price point. Only relevant when
 * `price_point_id` is set.
 */
class FeatureOwnerPricePointType
{
    public const PRODUCTPRICEPOINT = 'ProductPricePoint';

    public const PRICEPOINT = 'PricePoint';

    private const _ALL_VALUES = [self::PRODUCTPRICEPOINT, self::PRICEPOINT];

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
        throw new Exception("$value is invalid for FeatureOwnerPricePointType.");
    }
}
