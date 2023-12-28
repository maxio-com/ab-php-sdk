<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

final class PaymentProfileTestData
{
    public const CARD_DISABLED = false;
    public const VAULT_TOKEN = '1';
    public const CURRENT_VAULT = 'bogus';
    public const CARD_EXPIRATION_YEAR = 2024;
    public const CARD_EXPIRATION_MONTH = 12;
    public const CARD_TYPE = 'visa';
    public const MASKED_CARD_NUMBER = 'XXXX-XXXX-XXXX-1111';
    public const ID = 300551;
    public const CUSTOMER_VAULT_TOKEN = null;
    public const BILLING_ADDRESS_TWO = null;
    public const PAYMENT_TYPE = 'credit_card';
    public const FULL_NUMBER = '4111111111111111';
    public const BANK_NAME = 'test bank';
    public const BANK_ROUTING_NUMBER = '021000089';
    public const BANK_ACCOUNT_NUMBER = '111111111111';
    public const BANK_ACCOUNT_TYPE = 'checking';
    public const BANK_ACCOUNT_HOLDER_TYPE = 'business';
}
