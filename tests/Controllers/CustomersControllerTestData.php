<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Tests\TestFactory\CustomerTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerResponseFactory;

final class CustomersControllerTestData
{
    public function __construct(
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestCustomerFactory $customerFactory,
        private TestCustomerResponseFactory $customerResponseFactory
    )
    {
    }

    public function getCreateCustomerRequest(): CreateCustomerRequest
    {
        return $this->customerRequestFactory->createCreateCustomerRequest();
    }

    public function getExpectedCustomer(int $id, string $createdAt, string $updatedAt): Customer
    {
        return $this->customerFactory->createWithDefaultValues($id, $createdAt, $updatedAt);
    }

    public function getNotExistingCustomerId(): int
    {
        return CustomerTestData::NON_EXISTING_CUSTOMER_ID;
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
}
