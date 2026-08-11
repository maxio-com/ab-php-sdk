
# Currency Price

## Structure

`CurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?float` | Optional | - | getPrice(): ?float | setPrice(?float price): void |
| `formattedPrice` | `?string` | Optional | - | getFormattedPrice(): ?string | setFormattedPrice(?string formattedPrice): void |
| `priceId` | `?int` | Optional | - | getPriceId(): ?int | setPriceId(?int priceId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `role` | [`?string(CurrencyPriceRole)`](../../doc/models/currency-price-role.md) | Optional | Role for the price. | getRole(): ?string | setRole(?string role): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CurrencyPriceBuilder;

$currencyPrice = CurrencyPriceBuilder::init()
    ->id(208)
    ->currency('currency4')
    ->price(70.88)
    ->formattedPrice('formatted_price2')
    ->priceId(214)
    ->build();
```

