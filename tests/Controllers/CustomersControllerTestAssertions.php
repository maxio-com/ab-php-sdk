<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\CustomerErrorResponseException;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Tests\TestStatusCode;

final class CustomersControllerTestAssertions
{
    public function __construct(private CustomersControllerTest $testCase)
    {
    }

    public function assertExpectedCustomerCreated(
        Customer $expectedCustomer,
        Customer $customer
    ): void
    {
        $this->testCase::assertEquals($expectedCustomer->jsonSerialize(), $customer->jsonSerialize());
    }

    public function assertExpectedCustomerWasReturned(Customer $expectedCustomer, Customer $customer): void
    {
        $this->testCase::assertEquals($expectedCustomer, $customer);
    }

    public function assertCustomerNotFound(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::NOT_FOUND);
    }

    /**
     * @param array<int, CustomerResponse> $expectedCustomersList
     * @param array<int, CustomerResponse> $customersList
     */
    public function assertCustomersReturned(array $expectedCustomersList, array $customersList): void
    {
        $this->testCase::assertEquals($expectedCustomersList, $customersList);
    }
}
