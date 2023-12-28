<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreatePaymentProfileBuilder;
use AdvancedBillingLib\Models\Builders\CreatePaymentProfileRequestBuilder;
use AdvancedBillingLib\Models\CreatePaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;

final class TestPaymentProfileRequestFactory
{
    public function create(int $customerId): CreatePaymentProfileRequest
    {
        return CreatePaymentProfileRequestBuilder::init($this->createCreatePaymentProfile($customerId))
            ->build();
    }

    private function createCreatePaymentProfile(int $customerId): CreatePaymentProfile
    {
        return CreatePaymentProfileBuilder::init()
            ->customerId($customerId)
            ->bankName(PaymentProfileTestData::BANK_NAME)
            ->bankRoutingNumber(PaymentProfileTestData::BANK_ROUTING_NUMBER)
            ->bankAccountNumber(PaymentProfileTestData::BANK_ACCOUNT_NUMBER)
            ->bankAccountType(PaymentProfileTestData::BANK_ACCOUNT_TYPE)
            ->bankAccountHolderType(PaymentProfileTestData::BANK_ACCOUNT_HOLDER_TYPE)
            ->paymentType(PaymentProfileTestData::PAYMENT_TYPE)
            ->expirationMonth(PaymentProfileTestData::CARD_EXPIRATION_MONTH)
            ->expirationYear(PaymentProfileTestData::CARD_EXPIRATION_YEAR)
            ->fullNumber(PaymentProfileTestData::FULL_NUMBER)
            ->build();
    }
}
