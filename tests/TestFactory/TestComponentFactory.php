<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ComponentBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPriceBuilder;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\ProductFamily;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;

final class TestComponentFactory
{
    public function create(
        int $id,
        int $defaultPricePointId,
        int $componentPriceId,
        ProductFamily $productFamily,
        string $pricePointUrl,
        string $pricePointName,
        string $createdAt,
        string $updatedAt
    ): Component
    {
        return ComponentBuilder::init()
            ->id($id)
            ->name(ComponentTestData::NAME)
            ->unitName(ComponentTestData::UNIT_NAME)
            ->unitPrice(ComponentTestData::UNIT_PRICE)
            ->pricingScheme(ComponentTestData::PRICING_SCHEME)
            ->handle(ComponentTestData::HANDLE)
            ->productFamilyId($productFamily->getId())
            ->productFamilyName($productFamily->getName())
            ->pricePerUnitInCents(ComponentTestData::PRICE_PER_UNIT_IN_CENTS)
            ->kind(ComponentTestData::QUANTITY_BASED_COMPONENT_KIND)
            ->archived(ComponentTestData::ARCHIVED)
            ->taxable(ComponentTestData::TAXABLE)
            ->description(ComponentTestData::DESCRIPTION)
            ->defaultPricePointId($defaultPricePointId)
            ->prices($this->createPrices($componentPriceId, $id, $defaultPricePointId))
            ->pricePointCount(ComponentTestData::PRICE_POINT_COUNT)
            ->pricePointsUrl($pricePointUrl)
            ->defaultPricePointName($pricePointName)
            ->taxCode(ComponentTestData::TAX_CODE)
            ->recurring(ComponentTestData::RECURRING)
            ->upgradeCharge(ComponentTestData::UPGRADE_CHARGE)
            ->downgradeCredit(ComponentTestData::DOWNGRADE_CREDIT)
            ->archivedAt(ComponentTestData::ARCHIVED_AT)
            ->hideDateRangeOnInvoice(ComponentTestData::HIDE_DATE_RANGE_ON_INVOICE)
            ->allowFractionalQuantities(ComponentTestData::ALLOW_FRACTIONAL_QUANTITIES)
            ->itemCategory(ComponentTestData::ITEM_CATEGORY)
            ->useSiteExchangeRate(ComponentTestData::USE_SITE_EXCHANGE_RATE)
            ->accountingCode(ComponentTestData::ACCOUNTING_CODE)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->build();
    }

    /**
     * @return array<int, Price>
     */
    private function createPrices(int $id, int $componentId, int $pricePointId): array
    {
        $price = ComponentPriceBuilder::init()
            ->id($id)
            ->componentId($componentId)
            ->startingQuantity(ComponentTestData::COMPONENT_PRICE_STARTING_QUANTITY)
            ->endingQuantity(ComponentTestData::COMPONENT_PRICE_ENDING_QUANTITY)
            ->unitPrice((string) ComponentTestData::COMPONENT_UNIT_PRICE)
            ->pricePointId($pricePointId)
            ->formattedUnitPrice(ComponentTestData::FORMATTED_UNIT_PRICE)
            ->segmentId(ComponentTestData::COMPONENT_PRICE_SEGMENT_ID)
            ->build();

        return [$price];
    }
}
