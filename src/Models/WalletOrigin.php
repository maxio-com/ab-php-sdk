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
 * How the wallet came to exist. `manual` for a wallet created directly with [Create
 * Wallet]($e/Wallets/createWallet). `feature` for a wallet auto-provisioned because a subscription
 * resolved a usage-limit entitlement whose Feature has `wallet_behavior` configured.
 */
class WalletOrigin
{
    public const MANUAL = 'manual';

    public const FEATURE = 'feature';

    private const _ALL_VALUES = [self::MANUAL, self::FEATURE];

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
        throw new Exception("$value is invalid for WalletOrigin.");
    }
}
