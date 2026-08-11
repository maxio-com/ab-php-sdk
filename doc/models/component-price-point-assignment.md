
# Component Price Point Assignment

## Structure

`ComponentPricePointAssignment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `pricePoint` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePoint(): | setPricePoint( pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentPricePointAssignmentBuilder;

$componentPricePointAssignment = ComponentPricePointAssignmentBuilder::init()
    ->componentId(190)
    ->pricePoint(
        'String7'
    )
    ->build();
```

