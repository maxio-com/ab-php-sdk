<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ProductBuilder;
use AdvancedBillingLib\Models\Builders\ProductFamilyBuilder;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Models\ProductFamily;

final class TestProductFactory
{
    private const PRODUCT_ID = 37022;
    private const PRODUCT_NAME = 'Professional Plan';
    private const PRODUCT_HANDLE = 'database-professional';
    private const PRODUCT_DESCRIPTION = 'Quia debitis aut.  Fugiat aut ratione.  Unde et dolores.';
    private const PRODUCT_PRICE_POINT_HANDLE = 'uuid:c60efa80-45bb-013b-952a-06d34debd55d';
    private const USE_SITE_EXCHANGE_RATE = true;
    private const DEFAULT_PRODUCT_PRICE_POINT_ID = 42506;
    private const REQUIRE_SHIPPING_ADDRESS = false;
    private const REQUIRE_BILLING_ADDRESS = false;
    private const REQUEST_BILLING_ADDRESS = false;
    private const PRODUCT_PRICE_POINT_NAME = 'Default';
    private const INITIAL_CHARGE_AFTER_TRIAL = false;
    private const TAXABLE = true;
    private const PRODUCT_INTERVAL_UNIT = 'month';
    private const PRODUCT_INTERVAL = 1;
    private const PRODUCT_UPDATED_AT = '2022-11-13T15:00:41-05:00';
    private const PRODUCT_CREATED_AT = '2022-11-13T15:00:41-05:00';
    private const PRODUCT_PRICE_POINT_ID = 42506;
    private const REQUEST_CREDIT_CARD = true;
    private const PRODUCT_ACCOUNTING_CODE = null;
    private const PRODUCT_EXPIRATION_INTERVAL = null;
    private const PRODUCT_EXPIRATION_INTERVAL_UNIT = null;
    private const PRODUCT_INITIAL_CHARGE_IN_CENTS = null;
    private const PRODUCT_TRIAL_PRICE_IN_CENTS = null;
    private const PRODUCT_TRIAL_INTERVAL = null;
    private const PRODUCT_TRIAL_INTERVAL_UNIT = null;
    private const PRODUCT_ARCHIVED_AT = null;
    private const PRODUCT_REQUIRE_CREDIT_CARD = true;
    private const PRODUCT_RETURN_PARAMS = null;
    private const PRODUCT_UPDATE_RETURN_URL = null;
    private const PRODUCT_UPDATE_RETURN_PARAMS = null;
    private const PRODUCT_PUBLIC_SIGNUP_PAGES = [];
    private const PRODUCT_TAX_CODE = null;
    private const PRODUCT_ITEM_CATEGORY = null;
    private const PRODUCT_PRICE_IN_CENTS = 29900;
    private const PRODUCT_VERSION_NUMBER = 1;
    private const PRODUCT_FAMILY_UPDATED_AT = '2022-11-13T15:00:41-05:00';
    private const PRODUCT_FAMILY_CREATED_AT = '2022-11-13T15:00:41-05:00';
    private const PRODUCT_FAMILY_HANDLE = 'cloud-database-service';
    private const PRODUCT_FAMILY_NAME = 'Cloud Database Service';
    private const PRODUCT_FAMILY_ID = 25703;
    private const PRODUCT_FAMILY_ACCOUNTING_CODE = null;
    private const PRODUCT_FAMILY_DESCRIPTION = null;

    public function createWithDefaultValues(): Product
    {
        return ProductBuilder::init()
            ->id(self::PRODUCT_ID)
            ->name(self::PRODUCT_NAME)
            ->handle(self::PRODUCT_HANDLE)
            ->description(self::PRODUCT_DESCRIPTION)
            ->requestCreditCard(self::REQUEST_CREDIT_CARD)
            ->createdAt(self::PRODUCT_CREATED_AT)
            ->updatedAt(self::PRODUCT_UPDATED_AT)
            ->priceInCents(self::PRODUCT_PRICE_IN_CENTS)
            ->interval(self::PRODUCT_INTERVAL)
            ->intervalUnit(self::PRODUCT_INTERVAL_UNIT)
            ->requestCreditCard(self::REQUEST_CREDIT_CARD)
            ->taxable(self::TAXABLE)
            ->initialChargeAfterTrial(self::INITIAL_CHARGE_AFTER_TRIAL)
            ->versionNumber(self::PRODUCT_VERSION_NUMBER)
            ->productFamily($this->createProductFamilyWithDefaultValues())
            ->productPricePointName(self::PRODUCT_PRICE_POINT_NAME)
            ->requestBillingAddress(self::REQUEST_BILLING_ADDRESS)
            ->requireBillingAddress(self::REQUIRE_BILLING_ADDRESS)
            ->requireShippingAddress(self::REQUIRE_SHIPPING_ADDRESS)
            ->defaultProductPricePointId(self::DEFAULT_PRODUCT_PRICE_POINT_ID)
            ->useSiteExchangeRate(self::USE_SITE_EXCHANGE_RATE)
            ->productPricePointId(self::PRODUCT_PRICE_POINT_ID)
            ->productPricePointHandle(self::PRODUCT_PRICE_POINT_HANDLE)
            ->accountingCode(self::PRODUCT_ACCOUNTING_CODE)
            ->expirationInterval(self::PRODUCT_EXPIRATION_INTERVAL)
            ->expirationIntervalUnit(self::PRODUCT_EXPIRATION_INTERVAL_UNIT)
            ->initialChargeInCents(self::PRODUCT_INITIAL_CHARGE_IN_CENTS)
            ->trialPriceInCents(self::PRODUCT_TRIAL_PRICE_IN_CENTS)
            ->trialInterval(self::PRODUCT_TRIAL_INTERVAL)
            ->trialIntervalUnit(self::PRODUCT_TRIAL_INTERVAL_UNIT)
            ->archivedAt(self::PRODUCT_ARCHIVED_AT)
            ->requireCreditCard(self::PRODUCT_REQUIRE_CREDIT_CARD)
            ->returnParams(self::PRODUCT_RETURN_PARAMS)
            ->updateReturnUrl(self::PRODUCT_UPDATE_RETURN_URL)
            ->updateReturnParams(self::PRODUCT_UPDATE_RETURN_PARAMS)
            ->publicSignupPages(self::PRODUCT_PUBLIC_SIGNUP_PAGES)
            ->taxCode(self::PRODUCT_TAX_CODE)
            ->itemCategory(self::PRODUCT_ITEM_CATEGORY)
            ->build();
    }

    private function createProductFamilyWithDefaultValues(): ProductFamily
    {
        return ProductFamilyBuilder::init()
            ->id(self::PRODUCT_FAMILY_ID)
            ->name(self::PRODUCT_FAMILY_NAME)
            ->handle(self::PRODUCT_FAMILY_HANDLE)
            ->createdAt(self::PRODUCT_FAMILY_CREATED_AT)
            ->updatedAt(self::PRODUCT_FAMILY_UPDATED_AT)
            ->accountingCode(self::PRODUCT_FAMILY_ACCOUNTING_CODE)
            ->description(self::PRODUCT_FAMILY_DESCRIPTION)
            ->build();
    }
}
