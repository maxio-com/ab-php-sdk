<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\UpdateCustomerRequest;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerResponseFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class CustomersControllerTestData
{
    public function __construct(
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestCustomerFactory $customerFactory,
        private TestCustomerResponseFactory $customerResponseFactory,
        private AdvancedBillingClient $client,
        private TestSubscriptionRequestFactory $subscriptionRequestFactory,
        private TestProductFamilyRequestFactory $productFamilyRequestFactory,
        private TestProductRequestFactory $productRequestFactory,
        private TestPaymentProfileRequestFactory $paymentProfileRequestFactory
    )
    {
    }

    public function getExpectedCustomer(int $id, string $createdAt, string $updatedAt): Customer
    {
        return $this->customerFactory->create($id, $createdAt, $updatedAt);
    }

    public function getNotExistingCustomerId(): int
    {
        return CustomerTestData::NOT_EXISTING_CUSTOMER_ID;
    }

    /**
     * @return array<string, string>
     */
    public function getEmptyListCustomersParametersArray(): array
    {
        return [];
    }

    /**
     * @return array<int, CustomerResponse>
     */
    public function getCustomersListResponse(Customer $customer): array
    {
        return [$this->customerResponseFactory->createWithCustomer($customer)];
    }

    public function loadCustomer(): Customer
    {
        return $this->client
            ->getCustomersController()
            ->createCustomer($this->getCreateCustomerRequest())
            ->getCustomer();
    }

    public function getCreateCustomerRequest(): CreateCustomerRequest
    {
        return $this->customerRequestFactory->createCreateCustomerRequest();
    }

    public function getUpdateCustomerRequest(): UpdateCustomerRequest
    {
        return $this->customerRequestFactory->createUpdateCustomerRequest();
    }

    public function getNotExistingCustomerReference(): string
    {
        return CustomerTestData::NOT_EXISTING_CUSTOMER_REFERENCE;
    }

    public function loadSubscription(int $customerId): Subscription
    {
        $productFamily = $this->client
            ->getProductFamiliesController()
            ->createProductFamily($this->productFamilyRequestFactory->create(ProductFamilyTestData::NAME_SEVEN))
            ->getProductFamily();
        $product = $this->client
            ->getProductsController()
            ->createProduct(
                $productFamily->getId(),
                $this->productRequestFactory->create(ProductTestData::NAME_FOUR, ProductTestData::HANDLE_FOUR)
            )
            ->getProduct();
        $paymentProfile = $this->client
            ->getPaymentProfilesController()
            ->createPaymentProfile($this->paymentProfileRequestFactory->create($customerId))
            ->getPaymentProfile();

        return $this->client
            ->getSubscriptionsController()
            ->createSubscription(
                $this->subscriptionRequestFactory->create(
                    $customerId,
                    $product->getId(),
                    $paymentProfile->getId()
                )
            )
            ->getSubscription();
    }
}
