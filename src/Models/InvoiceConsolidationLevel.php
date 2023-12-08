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
 * Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one
 * of the following values:
 *
 * * "none": A normal invoice with no consolidation.
 * * "child": An invoice segment which has been combined into a consolidated invoice.
 * * "parent": A consolidated invoice, whose contents are composed of invoice segments.
 *
 * "Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate
 * the member invoice segments.
 *
 * See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-
 * us/articles/4407746391835).
 */
class InvoiceConsolidationLevel
{
    public const NONE = 'none';

    public const CHILD = 'child';

    public const PARENT_ = 'parent';

    private const _ALL_VALUES = [self::NONE, self::CHILD, self::PARENT_];

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
        throw new Exception("$value is invalid for InvoiceConsolidationLevel.");
    }
}
