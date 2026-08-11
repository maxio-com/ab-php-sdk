
# Create Product Currency Price

## Structure

`CreateProductCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currency` | `string` | Required | ISO code for one of the site level currencies. | getCurrency(): string | setCurrency(string currency): void |
| `price` | `int` | Required | Price for the given role. | getPrice(): int | setPrice(int price): void |
| `role` | [`string(CurrencyPriceRole)`](../../doc/models/currency-price-role.md) | Required | Role for the price. | getRole(): string | setRole(string role): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductCurrencyPriceBuilder;
use AdvancedBillingLib\Models\CurrencyPriceRole;

$createProductCurrencyPrice = CreateProductCurrencyPriceBuilder::init(
    'currency2',
    78,
    CurrencyPriceRole::BASELINE
)->build();
```

