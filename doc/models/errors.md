
# Errors

## Structure

`Errors`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | `string[]` | Required | - | getPricePoint(): array | setPricePoint(array pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ErrorsBuilder;

$errors = ErrorsBuilder::init(
    [
        'price_point0',
        'price_point9',
        'price_point8'
    ]
)->build();
```

