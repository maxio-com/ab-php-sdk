<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\CustomerErrorResponseException;
use AdvancedBillingLib\Models\Customer;
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

    public function assertExceptionWasThrown(): void
    {
        $this->testCase->expectException(CustomerErrorResponseException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::UNPROCESSABLE_CONTENT);
    }
}
