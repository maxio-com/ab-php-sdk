<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CustomerResponseBuilder;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;

final class TestCustomerResponseFactory
{
    public function createWithCustomer(Customer $customer): CustomerResponse
    {
        return CustomerResponseBuilder::init($customer)
            ->build();
    }
}
