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
 * Invoice Event Type
 */
class InvoiceEventType
{
    public const ISSUE_INVOICE = 'issue_invoice';

    public const APPLY_CREDIT_NOTE = 'apply_credit_note';

    public const CREATE_CREDIT_NOTE = 'create_credit_note';

    public const APPLY_PAYMENT = 'apply_payment';

    public const APPLY_DEBIT_NOTE = 'apply_debit_note';

    public const CREATE_DEBIT_NOTE = 'create_debit_note';

    public const REFUND_INVOICE = 'refund_invoice';

    public const VOID_INVOICE = 'void_invoice';

    public const VOID_REMAINDER = 'void_remainder';

    public const BACKPORT_INVOICE = 'backport_invoice';

    public const CHANGE_INVOICE_STATUS = 'change_invoice_status';

    public const CHANGE_INVOICE_COLLECTION_METHOD = 'change_invoice_collection_method';

    public const REMOVE_PAYMENT = 'remove_payment';

    public const FAILED_PAYMENT = 'failed_payment';

    public const CHANGE_CHARGEBACK_STATUS = 'change_chargeback_status';

    private const _ALL_VALUES = [
        self::ISSUE_INVOICE,
        self::APPLY_CREDIT_NOTE,
        self::CREATE_CREDIT_NOTE,
        self::APPLY_PAYMENT,
        self::APPLY_DEBIT_NOTE,
        self::CREATE_DEBIT_NOTE,
        self::REFUND_INVOICE,
        self::VOID_INVOICE,
        self::VOID_REMAINDER,
        self::BACKPORT_INVOICE,
        self::CHANGE_INVOICE_STATUS,
        self::CHANGE_INVOICE_COLLECTION_METHOD,
        self::REMOVE_PAYMENT,
        self::FAILED_PAYMENT,
        self::CHANGE_CHARGEBACK_STATUS
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
        throw new Exception("$value is invalid for InvoiceEventType.");
    }
}
