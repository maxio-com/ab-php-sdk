
# Update Currency Price

## Structure

`UpdateCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | ID of the currency price record being updated | getId(): int | setId(int id): void |
| `price` | `float` | Required | New price for the given currency | getPrice(): float | setPrice(float price): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateCurrencyPriceBuilder;

$updateCurrencyPrice = UpdateCurrencyPriceBuilder::init(
    104,
    163.6
)->build();
```

