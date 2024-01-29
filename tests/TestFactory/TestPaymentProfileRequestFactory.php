<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreatePaymentProfileBuilder;
use AdvancedBillingLib\Models\Builders\CreatePaymentProfileRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdatePaymentProfileBuilder;
use AdvancedBillingLib\Models\Builders\UpdatePaymentProfileRequestBuilder;
use AdvancedBillingLib\Models\CreatePaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Models\UpdatePaymentProfile;
use AdvancedBillingLib\Models\UpdatePaymentProfileRequest;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;

final class TestPaymentProfileRequestFactory
{
    public function createCreateCreditCardPaymentProfileRequest(int $customerId): CreatePaymentProfileRequest
    {
        return CreatePaymentProfileRequestBuilder::init($this->createCreditCardPaymentProfile($customerId))
            ->build();
    }

    public function createCreateBankAccountPaymentProfileRequest(int $customerId): CreatePaymentProfileRequest
    {
        return CreatePaymentProfileRequestBuilder::init($this->createBankAccountPaymentProfile($customerId))
            ->build();
    }

    private function createCreditCardPaymentProfile(int $customerId): CreatePaymentProfile
    {
        return CreatePaymentProfileBuilder::init()
            ->customerId($customerId)
            ->paymentType(PaymentProfileTestData::CREDIT_CARD_PAYMENT_TYPE)
            ->expirationMonth(PaymentProfileTestData::CARD_EXPIRATION_MONTH)
            ->expirationYear(PaymentProfileTestData::CARD_EXPIRATION_YEAR)
            ->fullNumber(PaymentProfileTestData::FULL_NUMBER)
            ->build();
    }

    private function createBankAccountPaymentProfile(int $customerId): CreatePaymentProfile
    {
        return CreatePaymentProfileBuilder::init()
            ->customerId($customerId)
            ->paymentType(PaymentProfileTestData::BANK_ACCOUNT_PAYMENT_TYPE)
            ->bankName(PaymentProfileTestData::BANK_NAME)
            ->bankRoutingNumber(PaymentProfileTestData::BANK_ROUTING_NUMBER)
            ->bankAccountNumber(PaymentProfileTestData::BANK_ACCOUNT_NUMBER)
            ->bankAccountType(PaymentProfileTestData::BANK_ACCOUNT_TYPE)
            ->bankAccountHolderType(PaymentProfileTestData::BANK_ACCOUNT_HOLDER_TYPE)
            ->build();
    }

    public function createUpdatePaymentProfileRequest(): UpdatePaymentProfileRequest
    {
        return UpdatePaymentProfileRequestBuilder::init($this->createUpdatePaymentProfile())
            ->build();
    }

    private function createUpdatePaymentProfile(): UpdatePaymentProfile
    {
        return UpdatePaymentProfileBuilder::init()
            ->firstName(PaymentProfileTestData::UPDATED_FIRST_NAME)
            ->lastName(PaymentProfileTestData::UPDATED_LAST_NAME)
            ->build();
    }
}
