
# Component Response

## Structure

`ComponentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `component` | [`Component`](../../doc/models/component.md) | Required | - | getComponent(): Component | setComponent(Component component): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\ItemCategory;

$componentResponse = ComponentResponseBuilder::init(
    ComponentBuilder::init()
        ->id(80)
        ->name('name8')
        ->handle('handle4')
        ->pricingScheme(PricingScheme::PER_UNIT)
        ->unitName('unit_name0')
        ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
        ->build()
)->build();
```

