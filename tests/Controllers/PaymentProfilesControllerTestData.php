<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\BankAccountVerificationRequest;
use AdvancedBillingLib\Models\Builders\CreatedPaymentProfileBuilder;
use AdvancedBillingLib\Models\CreatedPaymentProfile;
use AdvancedBillingLib\Models\CreatePaymentProfileRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\UpdatePaymentProfileRequest;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestData\PaymentProfileTestData;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class PaymentProfilesControllerTestData
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductRequestFactory $productRequestFactory,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory
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
        return $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory->createCreatePaymentProfileRequest($customerId))
            ->getPaymentProfile();
    }

    public function getUpdatePaymentProfileRequest(): UpdatePaymentProfileRequest
    {
        return $this->paymentProfileRequestFactory->createUpdatePaymentProfileRequest();
    }

    public function loadSubscription(int $customerId, int $paymentProfileId): Subscription
    {
        $productFamily = $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_EIGHT))
            ->getProductFamily();
        $product = $this->client
            ->getProductsController()
            ->createProduct(
                $productFamily->getId(),
                $this->productRequestFactory->create(ProductTestData::NAME_FIVE, ProductTestData::HANDLE_FIVE)
            )
            ->getProduct();

        return $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->subscriptionRequestFactory->create(
                    $customerId,
                    $product->getId(),
                    $paymentProfileId
                )
            )
            ->getSubscription();
    }
}
