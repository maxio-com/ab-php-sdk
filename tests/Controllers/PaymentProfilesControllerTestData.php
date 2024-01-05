<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\Builders\CreatedPaymentProfileBuilder;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\UpdatePaymentProfileRequest;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;

final class PaymentProfilesControllerTestData
{
    public function __construct(
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory,
        private TestCustomerLoader $customerLoader,
        private TestPaymentProfileLoader $paymentProfileLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestSubscriptionsLoader $subscriptionsLoader,
        private TestProductLoader $productLoader
    )
    {
    }

    public function loadCustomer(): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithPredefinedData();
    }

    public function getCreatePaymentProfileRequest(int $customerId): CreatePaymentProfileRequest
    {
        return $this->paymentProfileRequestFactory->createCreatePaymentProfileRequest($customerId);
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

    /**
     * @return array<string, int>
     */
    public function getListRequestParams(int $customerId): array
    {
        return ['customer_id' => $customerId];
    }

    public function loadPaymentProfile(int $customerId): CreatedPaymentProfile
    {
        return $this->paymentProfileLoader->load($customerId);
    }

    public function getUpdatePaymentProfileRequest(): UpdatePaymentProfileRequest
    {
        return $this->paymentProfileRequestFactory->createUpdatePaymentProfileRequest();
    }

    public function loadSubscription(int $customerId, int $paymentProfileId): Subscription
    {
        $productFamily = $this->productFamilyLoader->load('PaymentProfilesController_ProductFamily_1');
        $product = $this->productLoader->load(
            'PaymentProfilesControllerTest Product 1',
            'paymentprofilescontrollertest-product-1',
            $productFamily->getId()
        );

        return $this->subscriptionsLoader->load($customerId, $product->getId(), $paymentProfileId);
    }
}
