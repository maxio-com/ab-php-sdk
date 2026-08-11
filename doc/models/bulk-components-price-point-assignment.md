
# Bulk Components Price Point Assignment

## Structure

`BulkComponentsPricePointAssignment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `components` | [`?(ComponentPricePointAssignment[])`](../../doc/models/component-price-point-assignment.md) | Optional | - | getComponents(): ?array | setComponents(?array components): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BulkComponentsPricePointAssignmentBuilder;
use AdvancedBillingLib\Models\Builders\ComponentPricePointAssignmentBuilder;

$bulkComponentsPricePointAssignment = BulkComponentsPricePointAssignmentBuilder::init()
    ->components(
        [
            ComponentPricePointAssignmentBuilder::init()
                ->componentId(108)
                ->pricePoint(
                    'String5'
                )
                ->build()
        ]
    )
    ->build();
```

