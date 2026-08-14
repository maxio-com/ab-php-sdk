
# Overage Pricing

## Structure

`OveragePricing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OveragePricingBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$overagePricing = OveragePricingBuilder::init(
    PricingScheme::PER_UNIT
)
    ->prices(
        [
            PriceBuilder::init(
                242,
                23.26
            )
                ->endingQuantity(
                    40
                )
                ->build(),
            PriceBuilder::init(
                242,
                23.26
            )
                ->endingQuantity(
                    40
                )
                ->build()
        ]
    )
    ->build();
```

