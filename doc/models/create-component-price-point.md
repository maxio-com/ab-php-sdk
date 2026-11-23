
# Create Component Price Point

## Structure

`CreateComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`Price[]`](../../doc/models/price.md) | Required | - | getPrices(): array | setPrices(array prices): void |
| `secondaryPricing` | [`?SecondaryPricing`](../../doc/models/secondary-pricing.md) | Optional | Hybrid Pricing only. The secondary pricing model that takes over once usage passes the primary model's included threshold. Applies to Quantity-Based and Metered Components on Sites with Hybrid Pricing enabled; ignored otherwise. Its `prices` brackets start at `1`, not at the primary model's highest `ending_quantity`. See [Hybrid Pricing](page:introduction/basic-concepts/hybrid-pricing). | getSecondaryPricing(): ?SecondaryPricing | setSecondaryPricing(?SecondaryPricing secondaryPricing): void |
| `secondaryPricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Hybrid Pricing only. Alternative to `secondary_pricing.pricing_scheme`; when both are sent, `secondary_pricing.pricing_scheme` is used. Setting not supported when creating price points in bulk. | getSecondaryPricingScheme(): ?string | setSecondaryPricingScheme(?string secondaryPricingScheme): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site. Setting not supported when creating price points in bulk.<br><br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax. Setting not supported when creating price points in bulk. | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `interval` | `?int` | Optional | The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean this price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\SecondaryPricingBuilder;

$createComponentPricePoint = CreateComponentPricePointBuilder::init(
    'name4',
    PricingScheme::PER_UNIT,
    [
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
    ->handle('handle0')
    ->secondaryPricing(
        SecondaryPricingBuilder::init()
            ->pricingScheme(PricingScheme::STAIRSTEP)
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
            ->build()
    )
    ->secondaryPricingScheme(PricingScheme::STAIRSTEP)
    ->useSiteExchangeRate(true)
    ->taxIncluded(false)
    ->build();
```

