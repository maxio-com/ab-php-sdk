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
 * The role of the credit note (e.g. 'general')
 */
class InvoiceRole2
{
    public const UNSET_ = 'unset';

    public const SIGNUP = 'signup';

    public const RENEWAL = 'renewal';

    public const USAGE = 'usage';

    public const REACTIVATION = 'reactivation';

    public const PRORATION = 'proration';

    public const MIGRATION = 'migration';

    public const ADHOC = 'adhoc';

    public const BACKPORT = 'backport';

    public const BACKPORTBALANCERECONCILIATION = 'backport-balance-reconciliation';

    private const _ALL_VALUES = [
        self::UNSET_,
        self::SIGNUP,
        self::RENEWAL,
        self::USAGE,
        self::REACTIVATION,
        self::PRORATION,
        self::MIGRATION,
        self::ADHOC,
        self::BACKPORT,
        self::BACKPORTBALANCERECONCILIATION
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
        throw new Exception("$value is invalid for InvoiceRole2.");
    }
}
