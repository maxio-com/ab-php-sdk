
# Create Prepaid Component

## Structure

`CreatePrepaidComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepaidUsageComponent` | [`PrepaidUsageComponent`](../../doc/models/prepaid-usage-component.md) | Required | - | getPrepaidUsageComponent(): PrepaidUsageComponent | setPrepaidUsageComponent(PrepaidUsageComponent prepaidUsageComponent): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePrepaidComponentBuilder;
use AdvancedBillingLib\Models\Builders\PrepaidUsageComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\OveragePricingBuilder;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\CreditType;

$createPrepaidComponent = CreatePrepaidComponentBuilder::init(
    PrepaidUsageComponentBuilder::init(
        'name2',
        'unit_name4',
        PricingScheme::PER_UNIT,
        OveragePricingBuilder::init(
            PricingScheme::STAIRSTEP
        )
            ->prices(
                [
                    PriceBuilder::init(
                        242,
                        23.26
                    )
                        ->endingQuantity(
                            40
                        )
                        ->build()
                ]
            )
            ->build()
    )
        ->description('description2')
        ->handle('handle8')
        ->taxable(false)
        ->prices(
            [
                PriceBuilder::init(
                    242,
                    23.26
                )
                    ->endingQuantity(
                        40
                    )
                    ->build()
            ]
        )
        ->upgradeCharge(CreditType::FULL)
        ->build()
)->build();
```

