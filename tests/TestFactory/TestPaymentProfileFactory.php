<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\PaymentProfileBuilder;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\PaymentProfile;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;

final class TestPaymentProfileFactory
{
    public function fromCreatedPaymentProfile(CreatedPaymentProfile $createdPaymentProfile): PaymentProfile
    {
        return PaymentProfileBuilder::init()
            ->id($createdPaymentProfile->getId())
            ->firstName($createdPaymentProfile->getFirstName())
            ->lastName($createdPaymentProfile->getLastName())
            ->maskedCardNumber($createdPaymentProfile->getMaskedCardNumber())
            ->cardType($createdPaymentProfile->getCardType())
            ->expirationMonth($createdPaymentProfile->getExpirationMonth())
            ->expirationYear($createdPaymentProfile->getExpirationYear())
            ->customerId($createdPaymentProfile->getCustomerId())
            ->currentVault($createdPaymentProfile->getCurrentVault())
            ->vaultToken($createdPaymentProfile->getVaultToken())
            ->paymentType($createdPaymentProfile->getPaymentType())
            ->disabled(PaymentProfileTestData::CARD_DISABLED)
            ->billingAddress($createdPaymentProfile->getBillingAddress())
            ->billingState($createdPaymentProfile->getBillingState())
            ->billingZip($createdPaymentProfile->getBillingZip())
            ->billingCountry($createdPaymentProfile->getBillingCountry())
            ->customerVaultToken($createdPaymentProfile->getCustomerVaultToken())
            ->billingAddress2($createdPaymentProfile->getBillingAddress2())
            ->siteGatewaySettingId($createdPaymentProfile->getSiteGatewaySettingId())
            ->gatewayHandle($createdPaymentProfile->getGatewayHandle())
            ->billingCity($createdPaymentProfile->getBillingCity())
            ->build();
    }
}
