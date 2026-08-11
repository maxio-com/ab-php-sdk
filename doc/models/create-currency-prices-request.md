
# Create Currency Prices Request

## Structure

`CreateCurrencyPricesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`CreateCurrencyPrice[]`](../../doc/models/create-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateCurrencyPricesRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateCurrencyPriceBuilder;

$createCurrencyPricesRequest = CreateCurrencyPricesRequestBuilder::init(
    [
        CreateCurrencyPriceBuilder::init()
            ->currency('currency8')
            ->price(233.74)
            ->priceId(116)
            ->build()
    ]
)->build();
```

