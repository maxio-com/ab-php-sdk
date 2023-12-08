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
 * The vault that stores the payment profile with the provided vault_token.
 */
class BankAccountVault
{
    public const BOGUS = 'bogus';

    public const AUTHORIZENET = 'authorizenet';

    public const STRIPE_CONNECT = 'stripe_connect';

    public const BRAINTREE_BLUE = 'braintree_blue';

    public const GOCARDLESS = 'gocardless';

    private const _ALL_VALUES =
        [self::BOGUS, self::AUTHORIZENET, self::STRIPE_CONNECT, self::BRAINTREE_BLUE, self::GOCARDLESS];

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
