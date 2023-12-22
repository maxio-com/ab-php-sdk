<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\PaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentProfile;

final class TestPaymentProfileFactory
{
    public function createWithDefaultValues(): PaymentProfile
    {
        return PaymentProfileBuilder::init()
            ->id(PaymentProfileTestData::ID)
            ->firstName(PaymentProfileTestData::CUSTOMER_FIRST_NAME)
            ->lastName(PaymentProfileTestData::CUSTOMER_LAST_NAME)
            ->maskedCardNumber(PaymentProfileTestData::MASKED_CARD_NUMBER)
            ->cardType(PaymentProfileTestData::CARD_TYPE)
            ->expirationMonth(PaymentProfileTestData::CARD_EXPIRATION_MONTH)
            ->expirationYear(PaymentProfileTestData::CARD_EXPIRATION_YEAR)
            ->customerId(PaymentProfileTestData::CUSTOMER_ID)
            ->currentVault(PaymentProfileTestData::CURRENT_VAULT)
            ->vaultToken(PaymentProfileTestData::VAULT_TOKEN)
            ->paymentType(PaymentProfileTestData::PAYMENT_TYPE)
            ->disabled(PaymentProfileTestData::CARD_DISABLED)
            ->billingAddress(PaymentProfileTestData::BILLING_ADDRESS)
            ->billingState(PaymentProfileTestData::BILLING_STATE)
            ->billingZip(PaymentProfileTestData::BILLING_ZIP)
            ->billingCountry(PaymentProfileTestData::BILLING_COUNTRY)
            ->customerVaultToken(PaymentProfileTestData::CUSTOMER_VAULT_TOKEN)
            ->billingAddress2(PaymentProfileTestData::BILLING_ADDRESS_TWO)
            ->siteGatewaySettingId(PaymentProfileTestData::SITE_GATEWAY_SETTING_ID)
            ->gatewayHandle(PaymentProfileTestData::GATEWAY_HANDLE)
            ->billingCity(PaymentProfileTestData::BILLING_CITY)
            ->build();
    }
}
