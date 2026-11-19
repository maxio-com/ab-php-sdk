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
 * The source of the tax. `Tax` is a tax configured in Advanced Billing. The other values identify the
 * tax service that calculated the tax.
 */
class ProformaInvoiceTaxSourceType
{
    public const TAX = 'Tax';

    public const AVALARA = 'Avalara';

    public const ANROK = 'Anrok';

    public const TAXJAR = 'TaxJar';

    public const NUMERAL = 'Numeral';

    public const SPHERE = 'Sphere';

    public const TAXWIRE = 'Taxwire';

    private const _ALL_VALUES =
        [self::TAX, self::AVALARA, self::ANROK, self::TAXJAR, self::NUMERAL, self::SPHERE, self::TAXWIRE];

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
        throw new Exception("$value is invalid for ProformaInvoiceTaxSourceType.");
    }
}
