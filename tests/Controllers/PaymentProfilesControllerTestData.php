<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Builders\CreatedPaymentProfileBuilder;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;

final class PaymentProfilesControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory,
    )
    {
    }

    public function loadCustomer(): Customer
    {
        return $this->client
            ->getCustomersController()
            ->createCustomer($this->customerRequestFactory->createCreateCustomerRequest())
            ->getCustomer();
    }

    public function createRequest(int $customerId): CreatePaymentProfileRequest
    {
        return $this->paymentProfileRequestFactory->create($customerId);
    }

    public function getExpectedPaymentProfile(int $paymentProfileId, int $customerId): CreatedPaymentProfile
    {
        return CreatedPaymentProfileBuilder::init()
            ->id($paymentProfileId)
            ->firstName(CustomerTestData::FIRST_NAME)
            ->lastName(CustomerTestData::LAST_NAME)
            ->maskedCardNumber(PaymentProfileTestData::MASKED_CARD_NUMBER)
            ->cardType(PaymentProfileTestData::CARD_TYPE)
            ->expirationMonth(PaymentProfileTestData::CARD_EXPIRATION_MONTH)
            ->expirationYear(PaymentProfileTestData::CARD_EXPIRATION_YEAR)
            ->customerId($customerId)
            ->currentVault(PaymentProfileTestData::CURRENT_VAULT)
            ->customerVaultToken(PaymentProfileTestData::CUSTOMER_VAULT_TOKEN)
            ->vaultToken(PaymentProfileTestData::VAULT_TOKEN)
            ->billingAddress2(PaymentProfileTestData::BILLING_ADDRESS_TWO)
            ->paymentType(PaymentProfileTestData::PAYMENT_TYPE)
            ->build();
    }
}
