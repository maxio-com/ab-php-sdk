<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\PaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentProfile;

final class TestPaymentProfileFactory
{
    private const CUSTOMER_FIRST_NAME = 'Willis';
    private const CUSTOMER_LAST_NAME = 'Reinger';
    private const CUSTOMER_ID = 406903;
    private const CARD_DISABLED = false;
    private const VAULT_TOKEN = '1';
    private const CURRENT_VAULT = 'bogus';
    private const CARD_EXPIRATION_YEAR = 2024;
    private const CARD_EXPIRATION_MONTH = 12;
    private const CARD_TYPE = 'bogus';
    private const MASKED_CARD_NUMBER = 'XXXX-XXXX-XXXX-1';
    private const PAYMENT_PROFILE_ID = 300551;
    private const PAYMENT_PROFILE_BILLING_ADDRESS = null;
    private const PAYMENT_PROFILE_BILLING_CITY = null;
    private const PAYMENT_PROFILE_BILLING_STATE = null;
    private const PAYMENT_PROFILE_BILLING_ZIP = null;
    private const PAYMENT_PROFILE_BILLING_COUNTRY = null;
    private const PAYMENT_PROFILE_CUSTOMER_VAULT_TOKEN = null;
    private const PAYMENT_PROFILE_BILLING_ADDRESS_TWO = null;
    private const PAYMENT_PROFILE_SITE_GATEWAY_SETTING_ID = null;
    private const PAYMENT_PROFILE_GATEWAY_HANDLE = null;
    private const PAYMENT_TYPE = 'credit_card';

    public function createWithDefaultValues(): PaymentProfile
    {
        return PaymentProfileBuilder::init()
            ->id(self::PAYMENT_PROFILE_ID)
            ->firstName(self::CUSTOMER_FIRST_NAME)
            ->lastName(self::CUSTOMER_LAST_NAME)
            ->maskedCardNumber(self::MASKED_CARD_NUMBER)
            ->cardType(self::CARD_TYPE)
            ->expirationMonth(self::CARD_EXPIRATION_MONTH)
            ->expirationYear(self::CARD_EXPIRATION_YEAR)
            ->customerId(self::CUSTOMER_ID)
            ->currentVault(self::CURRENT_VAULT)
            ->vaultToken(self::VAULT_TOKEN)
            ->paymentType(self::PAYMENT_TYPE)
            ->disabled(self::CARD_DISABLED)
            ->billingAddress(self::PAYMENT_PROFILE_BILLING_ADDRESS)
            ->billingState(self::PAYMENT_PROFILE_BILLING_STATE)
            ->billingZip(self::PAYMENT_PROFILE_BILLING_ZIP)
            ->billingCountry(self::PAYMENT_PROFILE_BILLING_COUNTRY)
            ->customerVaultToken(self::PAYMENT_PROFILE_CUSTOMER_VAULT_TOKEN)
            ->billingAddress2(self::PAYMENT_PROFILE_BILLING_ADDRESS_TWO)
            ->siteGatewaySettingId(self::PAYMENT_PROFILE_SITE_GATEWAY_SETTING_ID)
            ->gatewayHandle(self::PAYMENT_PROFILE_GATEWAY_HANDLE)
            ->billingCity(self::PAYMENT_PROFILE_BILLING_CITY)
            ->build();
    }
}
