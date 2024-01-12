<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\ComponentPricePointItemBuilder;
use AdvancedBillingLib\Models\Builders\CreateOnOffComponentBuilder;
use AdvancedBillingLib\Models\Builders\CreateQuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\Builders\OnOffComponentBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\QuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\ComponentPricePointItem;
use AdvancedBillingLib\Models\CreateOnOffComponent;
use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\OnOffComponent;
use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\QuantityBasedComponent;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;

final class TestComponentRequestFactory
{
    public function createCreateQuantityBasedComponent(
        string $name,
        string $unitName,
        string $pricingScheme
    ): CreateQuantityBasedComponent
    {
        return CreateQuantityBasedComponentBuilder::init(
            $this->createQuantityBasedComponent($name, $unitName, $pricingScheme)
        )
            ->build();
    }

    private function createQuantityBasedComponent(
        string $name,
        string $unitName,
        string $pricingScheme
    ): QuantityBasedComponent
    {
        return QuantityBasedComponentBuilder::init(
            $name,
            $unitName,
            $pricingScheme
        )
            ->prices($this->createPrices())
            ->build();
    }

    /**
     * @return array<int, Price>
     */
    private function createPrices(): array
    {
        $price = PriceBuilder::init(
            ComponentTestData::COMPONENT_PRICE_STARTING_QUANTITY,
            ComponentTestData::COMPONENT_UNIT_PRICE,
        )
            ->build();

        return [$price];
    }

    private function createCustomPricePoint(): ComponentPricePointItem
    {
        return ComponentPricePointItemBuilder::init()
            ->name('custom price point')
            ->prices($this->createPrices())
            ->pricingScheme(ComponentTestData::PRICING_SCHEME)
            ->build();
    }

    public function createCreateOnOffComponent(string $name): CreateOnOffComponent
    {
        return CreateOnOffComponentBuilder::init($this->createOnOffComponent($name))
            ->build();
    }

    private function createOnOffComponent(string $name): OnOffComponent
    {
        return OnOffComponentBuilder::init($name)
            ->unitPrice(ComponentTestData::ON_OFF_COMPONENT_UNIT_PRICE)
            ->build();
    }

    public function createCreateOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(string $name): CreateOnOffComponent
    {
        return CreateOnOffComponentBuilder::init(
            $this->createOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint($name)
        )
            ->build();
    }

    private function createOnOffComponentWithAllowedFractionalQuantitiesAndCustomPricePoint(string $name): OnOffComponent
    {
        return OnOffComponentBuilder::init($name)
            ->unitPrice(ComponentTestData::ON_OFF_COMPONENT_UNIT_PRICE)
            ->allowFractionalQuantities(true)
            ->pricePoints([$this->createCustomPricePoint()])
            ->build();
    }
}
