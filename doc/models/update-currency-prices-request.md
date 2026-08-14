
# Update Currency Prices Request

## Structure

`UpdateCurrencyPricesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyPrices` | [`UpdateCurrencyPrice[]`](../../doc/models/update-currency-price.md) | Required | - | getCurrencyPrices(): array | setCurrencyPrices(array currencyPrices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateCurrencyPricesRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateCurrencyPriceBuilder;

$updateCurrencyPricesRequest = UpdateCurrencyPricesRequestBuilder::init(
    [
        UpdateCurrencyPriceBuilder::init(
            50,
            233.74
        )->build()
    ]
)->build();
```

