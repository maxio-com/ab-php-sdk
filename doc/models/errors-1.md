
# Errors 1

## Structure

`Errors1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `perPage` | `?(string[])` | Optional | - | getPerPage(): ?array | setPerPage(?array perPage): void |
| `pricePoint` | `?(string[])` | Optional | - | getPricePoint(): ?array | setPricePoint(?array pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Errors1Builder;

$errors1 = Errors1Builder::init()
    ->perPage(
        [
            'per_page9'
        ]
    )
    ->pricePoint(
        [
            'price_point0'
        ]
    )
    ->build();
```

