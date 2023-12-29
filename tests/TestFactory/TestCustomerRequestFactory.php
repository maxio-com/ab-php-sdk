<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateCustomerBuilder;
use AdvancedBillingLib\Models\Builders\CreateCustomerRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateCustomerBuilder;
use AdvancedBillingLib\Models\Builders\UpdateCustomerRequestBuilder;
use AdvancedBillingLib\Models\CreateCustomer;
use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\UpdateCustomer;
use AdvancedBillingLib\Models\UpdateCustomerRequest;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;

final class TestCustomerRequestFactory
{
    public function createCreateCustomerRequest(): CreateCustomerRequest
    {
        return CreateCustomerRequestBuilder::init($this->buildCreateCustomer())
            ->build();
    }

    private function buildCreateCustomer(): CreateCustomer
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

    public function createUpdateCustomerRequest(): UpdateCustomerRequest
    {
        return UpdateCustomerRequestBuilder::init($this->buildUpdateCustomer())
            ->build();
    }

    private function buildUpdateCustomer(): UpdateCustomer
    {
        return UpdateCustomerBuilder::init()
            ->firstName(CustomerTestData::UPDATED_FIRST_NAME)
            ->lastName(CustomerTestData::UPDATED_LAST_NAME)
            ->build();
    }
}
