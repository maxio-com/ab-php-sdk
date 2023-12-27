<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\AllocationSettings;
use AdvancedBillingLib\Models\Builders\AllocationSettingsBuilder;
use AdvancedBillingLib\Models\Builders\NetTermsBuilder;
use AdvancedBillingLib\Models\Builders\OrganizationAddressBuilder;
use AdvancedBillingLib\Models\Builders\SiteBuilder;
use AdvancedBillingLib\Models\Builders\TaxConfigurationBuilder;
use AdvancedBillingLib\Models\NetTerms;
use AdvancedBillingLib\Models\OrganizationAddress;
use AdvancedBillingLib\Models\Site;
use AdvancedBillingLib\Models\TaxConfiguration;

final class TestSiteFactory
{
    private const SITE_ID = 4676;
    private const SITE_NAME = 'PHP SDK Env';
    private const SITE_SUBDOMAIN = 'php-sdk';
    private const SITE_CURRENCY = 'USD';
    private const SELLER_ID = 722159;
    private const EMPTY_NON_PRIMARY_CURRENCIES_LIST = [];
    private const RELATIONSHIP_INVOICING_ENABLED = true;
    private const CUSTOMER_HIERARCHY_ENABLED = false;
    private const WHOPAYS_ENABLED = false;
    private const WHOPAYS_DEFAULT_PAYER = 'self-ungrouped';
    private const ALLOCATION_SETTINGS_ACCRUE_CHANGE = true;
    private const ALLOCATION_SETTINGS_UPGRADE_CHARGE = 'prorated';
    private const ALLOCATION_SETTINGS_DOWNGRADE_CREDIT = 'none';
    private const DEFAULT_PAYMENT_COLLECTION_METHOD = 'automatic';
    private const ORGANIZATION_ADDRESS_STREET = 'Asdf Street';
    private const ORGANIZATION_ADDRESS_LINE_TWO = '123/444';
    private const ORGANIZATION_ADDRESS_CITY = 'San Antonio';
    private const ORGANIZATION_ADDRESS_STATE = 'TX';
    private const ORGANIZATION_ADDRESS_ZIP = '78015';
    private const ORGANIZATION_ADDRESS_COUNTRY = 'US';
    private const ORGANIZATION_ADDRESS_NAME = 'Developer Experience';
    private const ORGANIZATION_ADDRESS_PHONE = '555 111 222';
    private const TAX_CONFIGURATION_KIND = 'custom';
    private const TAX_CONFIGURATION_DESTINATION_ADDRESS = 'shipping_then_billing';
    private const TAX_CONFIGURATION_FULLY_CONFIGURED = false;
    private const DEFAULT_NET_TERMS = 0;
    private const AUTOMATIC_NET_TERMS = 0;
    private const REMITTANCE_NET_TERMS = 0;
    private const ON_REMITTANCE_SIGNUPS_ENABLED = false;
    private const CUSTOM_NET_TERMS_ENABLED = false;
    private const TEST = true;

    public function createSiteWithDefaultValues(): Site
    {
        return SiteBuilder::init()
            ->id(self::SITE_ID)
            ->name(self::SITE_NAME)
            ->subdomain(self::SITE_SUBDOMAIN)
            ->currency(self::SITE_CURRENCY)
            ->sellerId(self::SELLER_ID)
            ->nonPrimaryCurrencies(self::EMPTY_NON_PRIMARY_CURRENCIES_LIST)
            ->relationshipInvoicingEnabled(self::RELATIONSHIP_INVOICING_ENABLED)
            ->customerHierarchyEnabled(self::CUSTOMER_HIERARCHY_ENABLED)
            ->whopaysEnabled(self::WHOPAYS_ENABLED)
            ->whopaysDefaultPayer(self::WHOPAYS_DEFAULT_PAYER)
            ->allocationSettings($this->createDefaultAllocationSettings())
            ->defaultPaymentCollectionMethod(self::DEFAULT_PAYMENT_COLLECTION_METHOD)
            ->organizationAddress($this->createDefaultOrganizationAddress())
            ->taxConfiguration($this->createDefaultTaxConfiguration())
            ->netTerms($this->createDefaultNetTerms())
            ->test(self::TEST)
            ->build();
    }

    private function createDefaultAllocationSettings(): AllocationSettings
    {
        return AllocationSettingsBuilder::init()
            ->accrueCharge(self::ALLOCATION_SETTINGS_ACCRUE_CHANGE)
            ->upgradeCharge(self::ALLOCATION_SETTINGS_UPGRADE_CHARGE)
            ->downgradeCredit(self::ALLOCATION_SETTINGS_DOWNGRADE_CREDIT)
            ->build();
    }

    private function createDefaultOrganizationAddress(): OrganizationAddress
    {
        return OrganizationAddressBuilder::init()
            ->street(self::ORGANIZATION_ADDRESS_STREET)
            ->line2(self::ORGANIZATION_ADDRESS_LINE_TWO)
            ->city(self::ORGANIZATION_ADDRESS_CITY)
            ->state(self::ORGANIZATION_ADDRESS_STATE)
            ->zip(self::ORGANIZATION_ADDRESS_ZIP)
            ->country(self::ORGANIZATION_ADDRESS_COUNTRY)
            ->name(self::ORGANIZATION_ADDRESS_NAME)
            ->phone(self::ORGANIZATION_ADDRESS_PHONE)
            ->build();
    }

    private function createDefaultTaxConfiguration(): TaxConfiguration
    {
        return TaxConfigurationBuilder::init()
            ->kind(self::TAX_CONFIGURATION_KIND)
            ->destinationAddress(self::TAX_CONFIGURATION_DESTINATION_ADDRESS)
            ->fullyConfigured(self::TAX_CONFIGURATION_FULLY_CONFIGURED)
            ->build();
    }

    private function createDefaultNetTerms(): NetTerms
    {
        return NetTermsBuilder::init()
            ->defaultNetTerms(self::DEFAULT_NET_TERMS)
            ->automaticNetTerms(self::AUTOMATIC_NET_TERMS)
            ->remittanceNetTerms(self::REMITTANCE_NET_TERMS)
            ->netTermsOnRemittanceSignupsEnabled(self::ON_REMITTANCE_SIGNUPS_ENABLED)
            ->customNetTermsEnabled(self::CUSTOM_NET_TERMS_ENABLED)
            ->build();
    }
}
