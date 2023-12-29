<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ProductBuilder;
use AdvancedBillingLib\Models\Product;
use AdvancedBillingLib\Tests\TestData\ProductFamilyTestData;
use AdvancedBillingLib\Tests\TestData\ProductTestData;
use DateTime;

final class TestProductFactory
{
    public function __construct(private TestProductFamilyFactory $productFamilyFactory)
    {
    }

    public function create(
        int $productId,
        DateTime $createdAt,
        DateTime $updatedAt,
        int $productFamilyId,
        string $productFamilyCreatedAt,
        string $productFamilyUpdatedAt,
        int $defaultProductPricePointId,
        int $productPricePointId,
        string $productPricePointHandle
    ): Product
    {
        return ProductBuilder::init()
            ->id($productId)
            ->name(ProductTestData::NAME_ONE)
            ->handle(ProductTestData::HANDLE_ONE)
            ->description(ProductTestData::DESCRIPTION)
            ->requestCreditCard(ProductTestData::REQUEST_CREDIT_CARD)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->priceInCents(ProductTestData::PRICE_IN_CENTS)
            ->interval(ProductTestData::INTERVAL)
            ->intervalUnit(ProductTestData::INTERVAL_UNIT)
            ->requestCreditCard(ProductTestData::REQUEST_CREDIT_CARD)
            ->taxable(ProductTestData::TAXABLE)
            ->initialChargeAfterTrial(ProductTestData::INITIAL_CHARGE_AFTER_TRIAL)
            ->versionNumber(ProductTestData::VERSION_NUMBER)
            ->productFamily(
                $this->productFamilyFactory->create(
                    $productFamilyId,
                    $productFamilyCreatedAt,
                    $productFamilyUpdatedAt,
                    ProductFamilyTestData::NAME_THREE,
                    ProductFamilyTestData::HANDLE_THREE
                )
            )
            ->productPricePointName(ProductTestData::PRICE_POINT_NAME)
            ->requestBillingAddress(ProductTestData::REQUEST_BILLING_ADDRESS)
            ->requireBillingAddress(ProductTestData::REQUIRE_BILLING_ADDRESS)
            ->requireShippingAddress(ProductTestData::REQUIRE_SHIPPING_ADDRESS)
            ->defaultProductPricePointId($defaultProductPricePointId)
            ->useSiteExchangeRate(ProductTestData::USE_SITE_EXCHANGE_RATE)
            ->productPricePointId($productPricePointId)
            ->productPricePointHandle($productPricePointHandle)
            ->accountingCode(ProductTestData::ACCOUNTING_CODE)
            ->expirationInterval(ProductTestData::EXPIRATION_INTERVAL)
            ->expirationIntervalUnit(ProductTestData::EXPIRATION_INTERVAL_UNIT)
            ->initialChargeInCents(ProductTestData::INITIAL_CHARGE_IN_CENTS)
            ->trialPriceInCents(ProductTestData::TRIAL_PRICE_IN_CENTS)
            ->trialInterval(ProductTestData::TRIAL_INTERVAL)
            ->trialIntervalUnit(ProductTestData::TRIAL_INTERVAL_UNIT)
            ->archivedAt(ProductTestData::ARCHIVED_AT)
            ->requireCreditCard(ProductTestData::REQUIRE_CREDIT_CARD)
            ->returnParams(ProductTestData::RETURN_PARAMS)
            ->updateReturnUrl(ProductTestData::UPDATE_RETURN_URL)
            ->updateReturnParams(ProductTestData::UPDATE_RETURN_PARAMS)
            ->publicSignupPages(ProductTestData::PUBLIC_SIGNUP_PAGES)
            ->taxCode(ProductTestData::TAX_CODE)
            ->itemCategory(ProductTestData::ITEM_CATEGORY)
            ->build();
    }
}
