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
 * The kind of tax or business identifier held by the customer:
 * - `vat_eu`: an EU VAT number. Requires `vat_country` to be an EU member state code or `GB`.
 * - `national_tax`: a national tax ID registered outside the EU. Requires `vat_country` to be one of
 * `AL`, `AM`, `AR`, `AU`, `BR`, `CA`, `CH`, `DZ`, `IN`, `MX`, `NO`, `NZ`, or `ZA`.
 * - `company_reg`: a company registration number, such as a French SIREN. No `vat_country` is required.
 * - `gln`: a Global Location Number. The value must be 13 digits.
 * - `duns`: a D-U-N-S Number. The value must be 9 digits.
 * - `lei`: a Legal Entity Identifier. The value must be 20 characters: 18 letters or digits followed
 * by 2 digits.
 *
 * A customer holds one identifier at a time. Saving an identifier of a different kind replaces the
 * existing one.
 */
class EntityIdentifierKind
{
    public const VAT_EU = 'vat_eu';

    public const NATIONAL_TAX = 'national_tax';

    public const COMPANY_REG = 'company_reg';

    public const GLN = 'gln';

    public const DUNS = 'duns';

    public const LEI = 'lei';

    private const _ALL_VALUES =
        [self::VAT_EU, self::NATIONAL_TAX, self::COMPANY_REG, self::GLN, self::DUNS, self::LEI];

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
        throw new Exception("$value is invalid for EntityIdentifierKind.");
    }
}
