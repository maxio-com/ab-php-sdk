<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

final class CustomerTestData
{
    public const NON_EXISTING_CUSTOMER_ID = 213431414321;
    public const FIRST_NAME = 'Example';
    public const LAST_NAME = 'Example';
    public const EMAIL = 'example@example.com';
    public const CC_EMAILS = 'example1@example.com, example2@example.com';
    public const ORGANIZATION = 'test';
    public const REFERENCE = 'test ref';
    public const ADDRESS = 'test address';
    public const ADDRESS_TWO = 'test address two';
    public const CITY = 'test city';
    public const STATE = 'test state';
    public const STATE_NAME = 'test state';
    public const ZIP = 'test zip';
    public const COUNTRY = 'TEST COUNTRY';
    public const COUNTRY_NAME = 'TEST COUNTRY';
    public const PHONE = '+00 123 456 789';
    public const VERIFIED = false;
    public const PORTAL_CUSTOMER_CREATED_AT = null;
    public const PORTAL_INVITE_LAST_SENT_AT = null;
    public const PORTAL_INVITE_LAST_ACCEPTED_AT = null;
    public const TAX_EXEMPT = false;
    public const VAT_NUMBER = 'test vat number';
    public const PARENT_ID = null;
    public const LOCALE = null;
}
