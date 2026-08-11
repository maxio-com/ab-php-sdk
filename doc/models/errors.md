
# Errors

## Structure

`Errors`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `perPage` | `?(string[])` | Optional | - | getPerPage(): ?array | setPerPage(?array perPage): void |
| `pricePoint` | `?(string[])` | Optional | - | getPricePoint(): ?array | setPricePoint(?array pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ErrorsBuilder;

$errors = ErrorsBuilder::init()
    ->perPage(
        [
            'per_page1',
            'per_page2',
            'per_page3'
        ]
    )
    ->pricePoint(
        [
            'price_point0',
            'price_point9',
            'price_point8'
        ]
    )
    ->build();
```

