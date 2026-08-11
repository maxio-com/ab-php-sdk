
# Create Quantity Based Component

## Structure

`CreateQuantityBasedComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantityBasedComponent` | [`QuantityBasedComponent`](../../doc/models/quantity-based-component.md) | Required | - | getQuantityBasedComponent(): QuantityBasedComponent | setQuantityBasedComponent(QuantityBasedComponent quantityBasedComponent): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateQuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\Builders\QuantityBasedComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\CreditType;

$createQuantityBasedComponent = CreateQuantityBasedComponentBuilder::init(
    QuantityBasedComponentBuilder::init(
        'name0',
        'unit_name2',
        PricingScheme::STAIRSTEP
    )
        ->description('description0')
        ->handle('handle6')
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
                    ->build(),
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
        ->upgradeCharge(CreditType::PRORATED)
        ->build()
)->build();
```

