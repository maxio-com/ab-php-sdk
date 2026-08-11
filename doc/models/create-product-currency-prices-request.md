
# Create Product Currency Prices Request

## Structure

`CreateProductCurrencyPricesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`CreateProductCurrencyPrice[]`](../../doc/models/create-product-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductCurrencyPricesRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateProductCurrencyPriceBuilder;
use AdvancedBillingLib\Models\CurrencyPriceRole;

$createProductCurrencyPricesRequest = CreateProductCurrencyPricesRequestBuilder::init(
    [
        CreateProductCurrencyPriceBuilder::init(
            'currency8',
            78,
            CurrencyPriceRole::INITIAL
        )->build()
    ]
)->build();
```

