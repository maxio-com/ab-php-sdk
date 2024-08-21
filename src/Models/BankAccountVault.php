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
 * The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing.
 */
class BankAccountVault
{
    public const AUTHORIZENET = 'authorizenet';

    public const BLUE_SNAP = 'blue_snap';

    public const BOGUS = 'bogus';

    public const FORTE = 'forte';

    public const GOCARDLESS = 'gocardless';

    public const MAXIO_PAYMENTS = 'maxio_payments';

    public const MAXP = 'maxp';

    public const STRIPE_CONNECT = 'stripe_connect';

    private const _ALL_VALUES = [
        self::AUTHORIZENET,
        self::BLUE_SNAP,
        self::BOGUS,
        self::FORTE,
        self::GOCARDLESS,
        self::MAXIO_PAYMENTS,
        self::MAXP,
        self::STRIPE_CONNECT
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
        throw new Exception("$value is invalid for BankAccountVault.");
    }
}
