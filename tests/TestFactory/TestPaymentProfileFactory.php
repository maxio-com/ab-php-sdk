<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\Builders\BankAccountPaymentProfileBuilder;
use AdvancedBillingLib\Models\Builders\CreditCardPaymentProfileBuilder;
use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;
use Exception;

final class TestPaymentProfileFactory
{
    public function fromCreatedPaymentProfile(
        CreditCardPaymentProfile|BankAccountPaymentProfile $createdPaymentProfile
    ): CreditCardPaymentProfile|BankAccountPaymentProfile
    {
        return match ($createdPaymentProfile::class) {
            CreditCardPaymentProfile::class => $this->fromCreditCardPaymentProfile($createdPaymentProfile),
            BankAccountPaymentProfile::class => $this->fromBankAccountPaymentProfile($createdPaymentProfile),
            default => throw new Exception(sprintf('Provided incompatible type for: %s', $createdPaymentProfile->getId()))
        };
    }

    private function fromCreditCardPaymentProfile(CreditCardPaymentProfile $paymentProfile): CreditCardPaymentProfile
    {
        return CreditCardPaymentProfileBuilder::init($paymentProfile->getPaymentType())
            ->id($paymentProfile->getId())
            ->firstName($paymentProfile->getFirstName())
            ->lastName($paymentProfile->getLastName())
            ->cardType($paymentProfile->getCardType())
            ->expirationMonth($paymentProfile->getExpirationMonth())
            ->expirationYear($paymentProfile->getExpirationYear())
            ->customerId($paymentProfile->getCustomerId())
            ->currentVault($paymentProfile->getCurrentVault())
            ->vaultToken($paymentProfile->getVaultToken())
            ->maskedCardNumber($paymentProfile->getMaskedCardNumber())
            ->disabled(PaymentProfileTestData::CARD_DISABLED)
            ->billingAddress($paymentProfile->getBillingAddress())
            ->billingState($paymentProfile->getBillingState())
            ->billingZip($paymentProfile->getBillingZip())
            ->billingCountry($paymentProfile->getBillingCountry())
            ->customerVaultToken($paymentProfile->getCustomerVaultToken())
            ->billingAddress2($paymentProfile->getBillingAddress2())
            ->siteGatewaySettingId($paymentProfile->getSiteGatewaySettingId())
            ->gatewayHandle($paymentProfile->getGatewayHandle())
            ->billingCity($paymentProfile->getBillingCity())
            ->build();
    }

    private function fromBankAccountPaymentProfile(BankAccountPaymentProfile $paymentProfile): BankAccountPaymentProfile
    {
        return BankAccountPaymentProfileBuilder::init(
            $paymentProfile->getMaskedBankRoutingNumber(),
            $paymentProfile->getMaskedBankAccountNumber()
        )
            ->id($paymentProfile->getId())
            ->bankAccountHolderType(PaymentProfileTestData::BANK_ACCOUNT_HOLDER_TYPE)
            ->bankAccountType(PaymentProfileTestData::BANK_ACCOUNT_TYPE)
            ->bankName($paymentProfile->getBankName())
            ->billingAddress($paymentProfile->getBillingAddress())
            ->billingAddress2($paymentProfile->getBillingAddress2())
            ->billingCity($paymentProfile->getBillingCity())
            ->billingState($paymentProfile->getBillingState())
            ->billingZip($paymentProfile->getBillingZip())
            ->billingCountry($paymentProfile->getBillingCountry())
            ->currentVault(PaymentProfileTestData::BANK_ACCOUNT_VAULT)
            ->customerId($paymentProfile->getCustomerId())
            ->customerVaultToken($paymentProfile->getCustomerVaultToken())
            ->firstName($paymentProfile->getFirstName())
            ->lastName($paymentProfile->getLastName())
            ->vaultToken($paymentProfile->getVaultToken())
            ->siteGatewaySettingId($paymentProfile->getSiteGatewaySettingId())
            ->gatewayHandle($paymentProfile->getGatewayHandle())
            ->paymentType(PaymentProfileTestData::BANK_ACCOUNT_PAYMENT_TYPE)
            ->build();
    }
}
