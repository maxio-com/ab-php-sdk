
# Component Currency Price

## Structure

`ComponentCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The ID of the stored currency price. This is `null` when the price point uses the site exchange rate (`use_site_exchange_rate: true`), because the price is calculated from the rate and is not stored. | getId(): ?int | setId(?int id): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?string` | Optional | - | getPrice(): ?string | setPrice(?string price): void |
| `formattedPrice` | `?string` | Optional | - | getFormattedPrice(): ?string | setFormattedPrice(?string formattedPrice): void |
| `priceId` | `?int` | Optional | - | getPriceId(): ?int | setPriceId(?int priceId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentCurrencyPriceBuilder;

$componentCurrencyPrice = ComponentCurrencyPriceBuilder::init()
    ->id(128)
    ->currency('currency2')
    ->price('price4')
    ->formattedPrice('formatted_price6')
    ->priceId(38)
    ->build();
```

