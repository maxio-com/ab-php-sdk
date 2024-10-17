<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CustomerBuilder;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use DateTime;

final class TestCustomerFactory
{
    public function create(int $id, DateTime $createdAt, DateTime $updatedAt): Customer
    {
        return CustomerBuilder::init()
            ->id($id)
            ->firstName(CustomerTestData::FIRST_NAME)
            ->lastName(CustomerTestData::LAST_NAME)
            ->email(CustomerTestData::EMAIL)
            ->ccEmails(CustomerTestData::CC_EMAILS)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->organization(CustomerTestData::ORGANIZATION)
            ->reference(CustomerTestData::REFERENCE)
            ->address(CustomerTestData::ADDRESS)
            ->address2(CustomerTestData::ADDRESS_TWO)
            ->additionalProperty('address_3', null)
            ->city(CustomerTestData::CITY)
            ->state(CustomerTestData::STATE)
            ->stateName(CustomerTestData::STATE_NAME)
            ->zip(CustomerTestData::ZIP)
            ->country(CustomerTestData::COUNTRY)
            ->countryName(CustomerTestData::COUNTRY_NAME)
            ->phone(CustomerTestData::PHONE)
            ->verified(CustomerTestData::VERIFIED)
            ->portalCustomerCreatedAt(CustomerTestData::PORTAL_CUSTOMER_CREATED_AT)
            ->portalInviteLastSentAt(CustomerTestData::PORTAL_INVITE_LAST_SENT_AT)
            ->portalInviteLastAcceptedAt(CustomerTestData::PORTAL_INVITE_LAST_ACCEPTED_AT)
            ->taxExempt(CustomerTestData::TAX_EXEMPT)
            ->vatNumber(CustomerTestData::VAT_NUMBER)
            ->parentId(CustomerTestData::PARENT_ID)
            ->locale(CustomerTestData::LOCALE)
            ->salesforceId(null)
            ->defaultAutoRenewalProfileId(null)
            ->taxExemptReason(null)
            ->build();
    }
}
