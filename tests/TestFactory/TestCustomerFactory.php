<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CustomerBuilder;
use AdvancedBillingLib\Models\Customer;

final class TestCustomerFactory
{
    public function createWithDefaultValues(): Customer
    {
        return CustomerBuilder::init()
            ->id(CustomerTestData::CUSTOMER_ID)
            ->firstName(CustomerTestData::CUSTOMER_FIRST_NAME)
            ->lastName(CustomerTestData::CUSTOMER_LAST_NAME)
            ->email(CustomerTestData::CUSTOMER_EMAIL)
            ->ccEmails(CustomerTestData::CUSTOMER_CC_EMAILS)
            ->createdAt(CustomerTestData::CUSTOMER_CREATED_AT)
            ->updatedAt(CustomerTestData::CUSTOMER_UPDATED_AT)
            ->organization(CustomerTestData::CUSTOMER_ORGANIZATION)
            ->reference(CustomerTestData::CUSTOMER_REFERENCE)
            ->address(CustomerTestData::CUSTOMER_ADDRESS)
            ->address2(CustomerTestData::CUSTOMER_ADDRESS_TWO)
            ->city(CustomerTestData::CUSTOMER_CITY)
            ->state(CustomerTestData::CUSTOMER_STATE)
            ->stateName(CustomerTestData::CUSTOMER_STATE_NAME)
            ->zip(CustomerTestData::CUSTOMER_ZIP)
            ->country(CustomerTestData::CUSTOMER_COUNTRY)
            ->countryName(CustomerTestData::CUSTOMER_COUNTRY_NAME)
            ->phone(CustomerTestData::CUSTOMER_PHONE)
            ->verified(CustomerTestData::CUSTOMER_VERIFIED)
            ->portalCustomerCreatedAt(CustomerTestData::PORTAL_CUSTOMER_CREATED_AT)
            ->portalInviteLastSentAt(CustomerTestData::PORTAL_INVITE_LAST_SENT_AT)
            ->portalInviteLastAcceptedAt(CustomerTestData::PORTAL_INVITE_LAST_ACCEPTED_AT)
            ->taxExempt(CustomerTestData::CUSTOMER_TAX_EXEMPT)
            ->vatNumber(CustomerTestData::CUSTOMER_VAT_NUMBER)
            ->parentId(CustomerTestData::CUSTOMER_PARENT_ID)
            ->locale(CustomerTestData::CUSTOMER_LOCALE)
            ->build();
    }
}
