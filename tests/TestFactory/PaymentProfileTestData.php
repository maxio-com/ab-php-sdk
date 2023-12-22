<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

final class PaymentProfileTestData
{
    public const CUSTOMER_FIRST_NAME = 'Willis';
    public const CUSTOMER_LAST_NAME = 'Reinger';
    public const CUSTOMER_ID = 406903;
    public const CARD_DISABLED = false;
    public const VAULT_TOKEN = '1';
    public const CURRENT_VAULT = 'bogus';
    public const CARD_EXPIRATION_YEAR = 2024;
    public const CARD_EXPIRATION_MONTH = 12;
    public const CARD_TYPE = 'bogus';
    public const MASKED_CARD_NUMBER = 'XXXX-XXXX-XXXX-1';
    public const ID = 300551;
    public const BILLING_ADDRESS = null;
    public const BILLING_CITY = null;
    public const BILLING_STATE = null;
    public const BILLING_ZIP = null;
    public const BILLING_COUNTRY = null;
    public const CUSTOMER_VAULT_TOKEN = null;
    public const BILLING_ADDRESS_TWO = null;
    public const SITE_GATEWAY_SETTING_ID = null;
    public const GATEWAY_HANDLE = null;
    public const PAYMENT_TYPE = 'credit_card';
    public const FULL_NUMBER = '4111111111111111';
}
