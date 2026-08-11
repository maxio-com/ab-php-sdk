
# Currency Prices Response

## Structure

`CurrencyPricesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`CurrencyPrice[]`](../../doc/models/currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CurrencyPricesResponseBuilder;
use AdvancedBillingLib\Models\Builders\CurrencyPriceBuilder;

$currencyPricesResponse = CurrencyPricesResponseBuilder::init(
    [
        CurrencyPriceBuilder::init()
            ->id(50)
            ->currency('currency8')
            ->price(233.74)
            ->formattedPrice('formatted_price6')
            ->priceId(116)
            ->build()
    ]
)->build();
```

