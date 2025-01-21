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
        'applyCreditNote' => 'apply_credit_note',
        'applyDebitNote' => 'apply_debit_note',
        'applyPayment' => 'apply_payment',
        'backportInvoice' => 'backport_invoice',
        'changeChargebackStatus' => 'change_chargeback_status',
        'changeInvoiceCollectionMethod' => 'change_invoice_collection_method',
        'changeInvoiceStatus' => 'change_invoice_status',
        'createCreditNote' => 'create_credit_note',
        'createDebitNote' => 'create_debit_note',
        'failedPayment' => 'failed_payment',
        'issueInvoice' => 'issue_invoice',
        'refundInvoice' => 'refund_invoice',
        'removePayment' => 'remove_payment',
        'voidInvoice' => 'void_invoice',
        'voidRemainder' => 'void_remainder',
        'eventType' => 'event_type',
        'applePay' => 'apple_pay',
        'bankAccount' => 'bank_account',
        'creditCard' => 'credit_card',
        'paypalAccount' => 'paypal_account',
        'applePay2' => 'apple_pay',
        'bankAccount2' => 'bank_account',
        'creditCard2' => 'credit_card',
        'paypalAccount2' => 'paypal_account',
        'paymentType' => 'payment_type'
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

    /**
     * Converts the properties to a human-readable string representation.
     *
     * Sample output:
     *
     * $prefix [$properties:key: $properties:value, $processedProperties]
     */
    public static function stringify(
        string $prefix,
        array $properties,
        string $processedProperties = ''
    ): string {
        return CoreHelper::stringify($prefix, $properties, $processedProperties);
    }
}
