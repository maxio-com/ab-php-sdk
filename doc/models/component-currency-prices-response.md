
# Component Currency Prices Response

## Structure

`ComponentCurrencyPricesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`ComponentCurrencyPrice[]`](../../doc/models/component-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentCurrencyPricesResponseBuilder;
use AdvancedBillingLib\Models\Builders\ComponentCurrencyPriceBuilder;

$componentCurrencyPricesResponse = ComponentCurrencyPricesResponseBuilder::init(
    [
        ComponentCurrencyPriceBuilder::init()
            ->id(50)
            ->currency('currency8')
            ->price('price4')
            ->formattedPrice('formatted_price6')
            ->priceId(116)
            ->build()
    ]
)->build();
```

