<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateCustomerBuilder;
use AdvancedBillingLib\Models\Builders\CreateCustomerRequestBuilder;
use AdvancedBillingLib\Models\CreateCustomer;
use AdvancedBillingLib\Models\CreateCustomerRequest;

final class TestCustomerRequestFactory
{
    public function createCreateCustomerRequest(): CreateCustomerRequest
    {
        return CreateCustomerRequestBuilder::init($this->createCreateCustomer())
            ->build();
    }

    private function createCreateCustomer(): CreateCustomer
    {
        return CreateCustomerBuilder::init(
            CustomerTestData::FIRST_NAME,
            CustomerTestData::LAST_NAME,
            CustomerTestData::EMAIL
        )
            ->ccEmails(CustomerTestData::CC_EMAILS)
            ->organization(CustomerTestData::ORGANIZATION)
            ->reference(CustomerTestData::REFERENCE)
            ->address(CustomerTestData::ADDRESS)
            ->address2(CustomerTestData::ADDRESS_TWO)
            ->city(CustomerTestData::CITY)
            ->state(CustomerTestData::STATE)
            ->zip(CustomerTestData::ZIP)
            ->country(CustomerTestData::COUNTRY)
            ->phone(CustomerTestData::PHONE)
            ->taxExempt(CustomerTestData::TAX_EXEMPT)
            ->vatNumber(CustomerTestData::VAT_NUMBER)
            ->parentId(CustomerTestData::PARENT_ID)
            ->locale(CustomerTestData::LOCALE)
            ->build();
    }
}
