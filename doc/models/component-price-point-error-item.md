
# Component Price Point Error Item

## Structure

`ComponentPricePointErrorItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `pricePoint` | `?int` | Optional | - | getPricePoint(): ?int | setPricePoint(?int pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentPricePointErrorItemBuilder;

$componentPricePointErrorItem = ComponentPricePointErrorItemBuilder::init()
    ->componentId(174)
    ->message('message2')
    ->pricePoint(72)
    ->build();
```

