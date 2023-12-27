<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;

final class CustomersControllerTestData
{
    public function __construct(
        private TestCustomerRequestFactory $customerRequestFactory,
        private TestCustomerFactory $customerFactory
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
}
