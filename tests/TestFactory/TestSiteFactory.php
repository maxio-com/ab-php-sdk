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
use AdvancedBillingLib\Tests\TestData\TestSiteData;

final class TestSiteFactory
{
    public function createSiteWithDefaultValues(): Site
    {
        return SiteBuilder::init()
            ->id(TestSiteData::SITE_ID)
            ->name(TestSiteData::SITE_NAME)
            ->subdomain(TestSiteData::SITE_SUBDOMAIN)
            ->currency(TestSiteData::SITE_CURRENCY)
            ->sellerId(TestSiteData::SELLER_ID)
            ->nonPrimaryCurrencies(TestSiteData::EMPTY_NON_PRIMARY_CURRENCIES_LIST)
            ->relationshipInvoicingEnabled(TestSiteData::RELATIONSHIP_INVOICING_ENABLED)
            ->customerHierarchyEnabled(TestSiteData::CUSTOMER_HIERARCHY_ENABLED)
            ->whopaysEnabled(TestSiteData::WHOPAYS_ENABLED)
            ->whopaysDefaultPayer(TestSiteData::WHOPAYS_DEFAULT_PAYER)
            ->allocationSettings($this->createDefaultAllocationSettings())
            ->defaultPaymentCollectionMethod(TestSiteData::DEFAULT_PAYMENT_COLLECTION_METHOD)
            ->organizationAddress($this->createDefaultOrganizationAddress())
            ->taxConfiguration($this->createDefaultTaxConfiguration())
            ->netTerms($this->createDefaultNetTerms())
            ->additionalProperty("brighton_v1_enabled", false)
            ->additionalProperty("auto_renewals_enabled", false)
            ->scheduleSubscriptionCancellationEnabled(false)
            ->test(TestSiteData::TEST)
            ->build();
    }

    private function createDefaultAllocationSettings(): AllocationSettings
    {
        return AllocationSettingsBuilder::init()
            ->accrueCharge(TestSiteData::ALLOCATION_SETTINGS_ACCRUE_CHANGE)
            ->upgradeCharge(TestSiteData::ALLOCATION_SETTINGS_UPGRADE_CHARGE)
            ->downgradeCredit(TestSiteData::ALLOCATION_SETTINGS_DOWNGRADE_CREDIT)
            ->build();
    }

    private function createDefaultOrganizationAddress(): OrganizationAddress
    {
        return OrganizationAddressBuilder::init()
            ->street(TestSiteData::ORGANIZATION_ADDRESS_STREET)
            ->line2(TestSiteData::ORGANIZATION_ADDRESS_LINE_TWO)
            ->city(TestSiteData::ORGANIZATION_ADDRESS_CITY)
            ->state(TestSiteData::ORGANIZATION_ADDRESS_STATE)
            ->zip(TestSiteData::ORGANIZATION_ADDRESS_ZIP)
            ->country(TestSiteData::ORGANIZATION_ADDRESS_COUNTRY)
            ->name(TestSiteData::ORGANIZATION_ADDRESS_NAME)
            ->phone(TestSiteData::ORGANIZATION_ADDRESS_PHONE)
            ->build();
    }

    private function createDefaultTaxConfiguration(): TaxConfiguration
    {
        return TaxConfigurationBuilder::init()
            ->kind(TestSiteData::TAX_CONFIGURATION_KIND)
            ->destinationAddress(TestSiteData::TAX_CONFIGURATION_DESTINATION_ADDRESS)
            ->fullyConfigured(TestSiteData::TAX_CONFIGURATION_FULLY_CONFIGURED)
            ->build();
    }

    private function createDefaultNetTerms(): NetTerms
    {
        return NetTermsBuilder::init()
            ->defaultNetTerms(TestSiteData::DEFAULT_NET_TERMS)
            ->automaticNetTerms(TestSiteData::AUTOMATIC_NET_TERMS)
            ->remittanceNetTerms(TestSiteData::REMITTANCE_NET_TERMS)
            ->netTermsOnRemittanceSignupsEnabled(TestSiteData::ON_REMITTANCE_SIGNUPS_ENABLED)
            ->customNetTermsEnabled(TestSiteData::CUSTOM_NET_TERMS_ENABLED)
            ->build();
    }
}
