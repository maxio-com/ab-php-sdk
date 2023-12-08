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
 * Action taken when payment for an invoice fails:
 * - `leave_open_invoice` - prepayments and credits applied to invoice; invoice status set to "open";
 * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
 * the invoice history. This is the default option.
 * - `rollback_to_pending` - prepayments and credits not applied; invoice remains in "pending" status;
 * no email sent to the customer; payment failure recorded in the invoice history.
 * - `initiate_dunning` - prepayments and credits applied to the invoice; invoice status set to "open";
 * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
 * the invoice history; subscription will  most likely go into "past_due" or "canceled" state
 * (depending upon net terms and dunning settings).
 */
class FailedPaymentAction
{
    public const LEAVE_OPEN_INVOICE = 'leave_open_invoice';

    public const ROLLBACK_TO_PENDING = 'rollback_to_pending';

    public const INITIATE_DUNNING = 'initiate_dunning';

    private const _ALL_VALUES = [self::LEAVE_OPEN_INVOICE, self::ROLLBACK_TO_PENDING, self::INITIATE_DUNNING];

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
        throw new Exception("$value is invalid for FailedPaymentAction.");
    }
}
