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

class ComponentKindPath
{
    public const METERED_COMPONENTS = 'metered_components';

    public const QUANTITY_BASED_COMPONENTS = 'quantity_based_components';

    public const ON_OFF_COMPONENTS = 'on_off_components';

    public const PREPAID_USAGE_COMPONENTS = 'prepaid_usage_components';

    public const EVENT_BASED_COMPONENTS = 'event_based_components';

    private const _ALL_VALUES = [
        self::METERED_COMPONENTS,
        self::QUANTITY_BASED_COMPONENTS,
        self::ON_OFF_COMPONENTS,
        self::PREPAID_USAGE_COMPONENTS,
        self::EVENT_BASED_COMPONENTS
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
        throw new Exception("$value is invalid for ComponentKindPath.");
    }
}
