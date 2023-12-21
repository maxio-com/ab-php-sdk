<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CustomerBuilder;
use AdvancedBillingLib\Models\Customer;

final class TestCustomerFactory
{
    private const CUSTOMER_FIRST_NAME = 'Willis';
    private const CUSTOMER_LAST_NAME = 'Reinger';
    private const CUSTOMER_ID = 406903;
    private const CUSTOMER_EMAIL = 'jame125@example.com';
    private const CUSTOMER_CC_EMAILS = 'john@example.com, sue@example.com';
    private const CUSTOMER_CREATED_AT = '2023-10-30T09:21:32-04:00';
    private const CUSTOMER_UPDATED_AT = '2023-10-30T09:21:32-04:00';
    private const CUSTOMER_ORGANIZATION = null;
    private const CUSTOMER_REFERENCE = null;
    private const CUSTOMER_ADDRESS = null;
    private const CUSTOMER_ADDRESS_TWO = null;
    private const CUSTOMER_CITY = null;
    private const CUSTOMER_STATE = null;
    private const CUSTOMER_STATE_NAME = null;
    private const CUSTOMER_ZIP = null;
    private const CUSTOMER_COUNTRY = null;
    private const CUSTOMER_COUNTRY_NAME = null;
    private const CUSTOMER_PHONE = null;
    private const CUSTOMER_VERIFIED = null;
    private const PORTAL_CUSTOMER_CREATED_AT = null;
    private const PORTAL_INVITE_LAST_SENT_AT = null;
    private const PORTAL_INVITE_LAST_ACCEPTED_AT = null;
    private const CUSTOMER_TAX_EXEMPT = false;
    private const CUSTOMER_VAT_NUMBER = null;
    private const CUSTOMER_PARENT_ID = null;
    private const CUSTOMER_LOCALE = null;

    public function createWithDefaultValues(): Customer
    {
        return CustomerBuilder::init()
            ->id(self::CUSTOMER_ID)
            ->firstName(self::CUSTOMER_FIRST_NAME)
            ->lastName(self::CUSTOMER_LAST_NAME)
            ->email(self::CUSTOMER_EMAIL)
            ->ccEmails(self::CUSTOMER_CC_EMAILS)
            ->createdAt(self::CUSTOMER_CREATED_AT)
            ->updatedAt(self::CUSTOMER_UPDATED_AT)
            ->organization(self::CUSTOMER_ORGANIZATION)
            ->reference(self::CUSTOMER_REFERENCE)
            ->address(self::CUSTOMER_ADDRESS)
            ->address2(self::CUSTOMER_ADDRESS_TWO)
            ->city(self::CUSTOMER_CITY)
            ->state(self::CUSTOMER_STATE)
            ->stateName(self::CUSTOMER_STATE_NAME)
            ->zip(self::CUSTOMER_ZIP)
            ->country(self::CUSTOMER_COUNTRY)
            ->countryName(self::CUSTOMER_COUNTRY_NAME)
            ->phone(self::CUSTOMER_PHONE)
            ->verified(self::CUSTOMER_VERIFIED)
            ->portalCustomerCreatedAt(self::PORTAL_CUSTOMER_CREATED_AT)
            ->portalInviteLastSentAt(self::PORTAL_INVITE_LAST_SENT_AT)
            ->portalInviteLastAcceptedAt(self::PORTAL_INVITE_LAST_ACCEPTED_AT)
            ->taxExempt(self::CUSTOMER_TAX_EXEMPT)
            ->vatNumber(self::CUSTOMER_VAT_NUMBER)
            ->parentId(self::CUSTOMER_PARENT_ID)
            ->locale(self::CUSTOMER_LOCALE)
            ->build();
    }
}
