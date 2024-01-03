<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateQuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\QuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\Price;
use AdvancedBillingLib\Models\QuantityBasedComponent;
use AdvancedBillingLib\Tests\TestData\ComponentTestData;

final class TestComponentRequestFactory
{
    public function createCreateQuantityBasedComponent(): CreateQuantityBasedComponent
    {
        return CreateQuantityBasedComponentBuilder::init($this->createQuantityBasedComponent())
            ->build();
    }

    private function createQuantityBasedComponent(): QuantityBasedComponent
    {
        return QuantityBasedComponentBuilder::init(
            ComponentTestData::NAME,
            ComponentTestData::UNIT_NAME,
            ComponentTestData::PRICING_SCHEME
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
}
