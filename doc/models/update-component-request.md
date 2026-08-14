
# Update Component Request

## Structure

`UpdateComponentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `component` | [`UpdateComponent`](../../doc/models/update-component.md) | Required | - | getComponent(): UpdateComponent | setComponent(UpdateComponent component): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateComponentRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateComponentBuilder;
use AdvancedBillingLib\Models\ItemCategory;

$updateComponentRequest = UpdateComponentRequestBuilder::init(
    UpdateComponentBuilder::init()
        ->handle('handle4')
        ->name('name8')
        ->description('description2')
        ->accountingCode('accounting_code4')
        ->taxable(false)
        ->itemCategory(ItemCategory::ENUM_BUSINESS_SOFTWARE)
        ->build()
)->build();
```

