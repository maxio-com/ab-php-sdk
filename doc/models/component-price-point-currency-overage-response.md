
# Component Price Point Currency Overage Response

## Structure

`ComponentPricePointCurrencyOverageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [`CurrencyOveragePrices`](../../doc/models/currency-overage-prices.md) | Required | Extends a component price point with currency overage prices. | getPricePoint(): CurrencyOveragePrices | setPricePoint(CurrencyOveragePrices pricePoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentPricePointCurrencyOverageResponseBuilder;
use AdvancedBillingLib\Models\Builders\CurrencyOveragePricesBuilder;
use AdvancedBillingLib\Models\PricePointType;
use AdvancedBillingLib\Models\PricingScheme;

$componentPricePointCurrencyOverageResponse = ComponentPricePointCurrencyOverageResponseBuilder::init(
    CurrencyOveragePricesBuilder::init()
        ->id(248)
        ->type(PricePointType::DEFAULT_)
        ->default(false)
        ->name('name0')
        ->pricingScheme(PricingScheme::PER_UNIT)
        ->build()
)->build();
```

