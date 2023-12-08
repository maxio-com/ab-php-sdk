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
 * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
 */
class CurrentVault
{
    public const ADYEN = 'adyen';

    public const AUTHORIZENET = 'authorizenet';

    public const AVALARA = 'avalara';

    public const BEANSTREAM = 'beanstream';

    public const BLUE_SNAP = 'blue_snap';

    public const BOGUS = 'bogus';

    public const BRAINTREE_BLUE = 'braintree_blue';

    public const CHECKOUT = 'checkout';

    public const CYBERSOURCE = 'cybersource';

    public const ELAVON = 'elavon';

    public const EWAY = 'eway';

    public const EWAY_RAPID_STD = 'eway_rapid_std';

    public const FIRSTDATA = 'firstdata';

    public const FORTE = 'forte';

    public const GOCARDLESS = 'gocardless';

    public const LITLE = 'litle';

    public const MAXIO_PAYMENTS = 'maxio_payments';

    public const MODUSLINK = 'moduslink';

    public const MONERIS = 'moneris';

    public const NMI = 'nmi';

    public const ORBITAL = 'orbital';

    public const PAYMENT_EXPRESS = 'payment_express';

    public const PIN = 'pin';

    public const SQUARE = 'square';

    public const STRIPE_CONNECT = 'stripe_connect';

    public const TRUST_COMMERCE = 'trust_commerce';

    public const UNIPAAS = 'unipaas';

    private const _ALL_VALUES = [
        self::ADYEN,
        self::AUTHORIZENET,
        self::AVALARA,
        self::BEANSTREAM,
        self::BLUE_SNAP,
        self::BOGUS,
        self::BRAINTREE_BLUE,
        self::CHECKOUT,
        self::CYBERSOURCE,
        self::ELAVON,
        self::EWAY,
        self::EWAY_RAPID_STD,
        self::FIRSTDATA,
        self::FORTE,
        self::GOCARDLESS,
        self::LITLE,
        self::MAXIO_PAYMENTS,
        self::MODUSLINK,
        self::MONERIS,
        self::NMI,
        self::ORBITAL,
        self::PAYMENT_EXPRESS,
        self::PIN,
        self::SQUARE,
        self::STRIPE_CONNECT,
        self::TRUST_COMMERCE,
        self::UNIPAAS
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
        throw new Exception("$value is invalid for CurrentVault.");
    }
}
