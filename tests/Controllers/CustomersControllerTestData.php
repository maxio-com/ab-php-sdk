<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\UpdateCustomerRequest;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerResponseFactory;

final class CustomersControllerTestData
{
    public function __construct(
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestCustomerFactory $customerFactory,
        private TestCustomerResponseFactory $customerResponseFactory,
        private TestCustomerLoader $customerLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestPaymentProfileLoader $paymentProfileLoader,
        private TestProductLoader $productLoader,
        private TestSubscriptionsLoader $subscriptionsLoader
    )
    {
    }

    public function getExpectedCustomer(int $id, DateTime $createdAt, DateTime $updatedAt): Customer
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
        return $this->customerLoader->loadSimpleCustomerWithPredefinedData();
    }

    public function getCreateCustomerRequest(): CreateCustomerRequest
    {
        return $this->customerRequestFactory->createCreateCustomerRequest(
            CustomerTestData::FIRST_NAME,
            CustomerTestData::LAST_NAME,
            CustomerTestData::EMAIL
        );
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
        $productFamily = $this->productFamilyLoader->load('CustomersControllerTest ProductFamily 1');
        $product = $this->productLoader->load(
            'CustomersControllerTest Product 1',
            'customerscontrollertest-product-1',
            $productFamily->getId()
        );
        $creditCardPaymentProfile = $this->paymentProfileLoader->loadCreditCard($customerId);

        return $this->subscriptionsLoader->load($customerId, $product->getId(), $creditCardPaymentProfile->getId());
    }
}
