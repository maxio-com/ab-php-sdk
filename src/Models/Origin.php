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
 * How the grant was created. `recurring` comes from the wallet's automatic funding schedule (see the
 * wallet's `recurring_funding` array). `manual` comes from a one-time grant posted to [Create Wallet
 * Transaction]($e/Wallet%20Transactions/createWalletTransaction). `initial_balance` comes from a non-
 * zero `initial_balance` at wallet creation. `allowance_increase` comes from raising a funding
 * entitlement's allowance while it's already funding a wallet. `purchase` comes from [Create Wallet
 * Purchase]($e/Wallet%20Purchases/createWalletPurchase).
 */
class Origin
{
    public const RECURRING = 'recurring';

    public const MANUAL = 'manual';

    public const INITIAL_BALANCE = 'initial_balance';

    public const ALLOWANCE_INCREASE = 'allowance_increase';

    public const PURCHASE = 'purchase';

    private const _ALL_VALUES =
        [self::RECURRING, self::MANUAL, self::INITIAL_BALANCE, self::ALLOWANCE_INCREASE, self::PURCHASE];

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
        throw new Exception("$value is invalid for Origin.");
    }
}
