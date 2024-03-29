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
 * The type of payment collection to be used in the subscription. For legacy Statements Architecture
 * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
 * options are - `remittance`, `automatic`, `prepaid`.
 */
class CollectionMethod
{
    public const AUTOMATIC = 'automatic';

    public const REMITTANCE = 'remittance';

    public const PREPAID = 'prepaid';

    public const INVOICE = 'invoice';

    private const _ALL_VALUES = [self::AUTOMATIC, self::REMITTANCE, self::PREPAID, self::INVOICE];

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
        throw new Exception("$value is invalid for CollectionMethod.");
    }
}
