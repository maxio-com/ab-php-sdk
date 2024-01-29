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
    public function createCreateCustomerRequest(
        string $firstName,
        string $lastName,
        string $email
    ): CreateCustomerRequest
    {
        return CreateCustomerRequestBuilder::init($this->buildCreateCustomer($firstName, $lastName, $email))
            ->build();
    }

    private function buildCreateCustomer(string $firstName, string $lastName, string $email): CreateCustomer
    {
        return CreateCustomerBuilder::init($firstName, $lastName, $email)
            ->ccEmails(CustomerTestData::CC_EMAILS)
            ->organization(CustomerTestData::ORGANIZATION)
            ->reference(CustomerTestData::REFERENCE . rand())
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
