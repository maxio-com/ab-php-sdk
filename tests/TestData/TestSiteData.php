<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

final class TestSiteData
{
    public const SITE_ID = 86566;
    public const SITE_NAME = 'PHP SDK';
    public const SITE_SUBDOMAIN = 'php-sdk';
    public const SITE_CURRENCY = 'USD';
    public const SELLER_ID = 56887;
    public const EMPTY_NON_PRIMARY_CURRENCIES_LIST = ["EUR"];
    public const RELATIONSHIP_INVOICING_ENABLED = true;
    public const CUSTOMER_HIERARCHY_ENABLED = false;
    public const WHOPAYS_ENABLED = false;
    public const WHOPAYS_DEFAULT_PAYER = 'self-ungrouped';
    public const ALLOCATION_SETTINGS_ACCRUE_CHANGE = 'true';
    public const ALLOCATION_SETTINGS_UPGRADE_CHARGE = 'prorated';
    public const ALLOCATION_SETTINGS_DOWNGRADE_CREDIT = 'none';
    public const DEFAULT_PAYMENT_COLLECTION_METHOD = 'automatic';
    public const ORGANIZATION_ADDRESS_STREET = 'Asdf Street';
    public const ORGANIZATION_ADDRESS_LINE_TWO = '123/444';
    public const ORGANIZATION_ADDRESS_CITY = 'San Antonio';
    public const ORGANIZATION_ADDRESS_STATE = 'TX';
    public const ORGANIZATION_ADDRESS_ZIP = '78015';
    public const ORGANIZATION_ADDRESS_COUNTRY = 'US';
    public const ORGANIZATION_ADDRESS_NAME = 'Maxio Developer Experience';
    public const ORGANIZATION_ADDRESS_PHONE = '555 111 222';
    public const TAX_CONFIGURATION_KIND = 'custom';
    public const TAX_CONFIGURATION_DESTINATION_ADDRESS = 'shipping_then_billing';
    public const TAX_CONFIGURATION_FULLY_CONFIGURED = false;
    public const DEFAULT_NET_TERMS = 0;
    public const AUTOMATIC_NET_TERMS = 0;
    public const REMITTANCE_NET_TERMS = 0;
    public const ON_REMITTANCE_SIGNUPS_ENABLED = false;
    public const CUSTOM_NET_TERMS_ENABLED = false;
    public const TEST = true;
}
