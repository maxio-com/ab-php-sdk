<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

use Core\Utils\CoreHelper;
use Core\Utils\JsonHelper;

/**
 * API utility class.
 */
class ApiHelper
{
    /**
     * A map of all discriminator substitutions where keys contain substituted
     * discriminators in templates while values are actual discriminator values.
     *
     * @var array
     */
    private const DISCRIMINATOR_SUBSTITUTIONS = [
        'applePay' => 'apple_pay',
        'bankAccount' => 'bank_account',
        'creditCard' => 'credit_card',
        'paypalAccount' => 'paypal_account'
    ];

    /**
     * @var JsonHelper
     */
    private static $jsonHelper;

    public static function getJsonHelper(): JsonHelper
    {
        if (self::$jsonHelper == null) {
            self::$jsonHelper = new JsonHelper(
                [],
                self::DISCRIMINATOR_SUBSTITUTIONS,
                'addAdditionalProperty',
                'AdvancedBillingLib\\Models'
            );
        }
        return self::$jsonHelper;
    }

    /**
     * Serialize any given mixed value.
     *
     * @param mixed $value Any value to be serialized
     *
     * @return string|null serialized value
     */
    public static function serialize($value): ?string
    {
        return CoreHelper::serialize($value);
    }

    /**
     * Deserialize a Json string.
     *
     * @param string $json A valid Json string
     *
     * @return mixed Decoded Json
     */
    public static function deserialize(string $json)
    {
        return CoreHelper::deserialize($json);
    }
}
