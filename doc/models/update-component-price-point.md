
# Update Component Price Point

## Structure

`UpdateComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `interval` | `?int` | Optional | The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `prices` | [`?(UpdatePrice[])`](../../doc/models/update-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `secondaryPricing` | [`?UpdateSecondaryPricing`](../../doc/models/update-secondary-pricing.md) | Optional | Hybrid Pricing only. Changes the secondary pricing model of an existing hybrid price point. Send `pricing_scheme` (or the top-level `secondary_pricing_scheme`) every time you send this block; a block without a scheme returns `422`. Brackets sent without an `id` are added to the existing ones rather than replacing them, so to change a bracket set, update existing brackets by `id` and remove the ones you no longer want with `_destroy: true`. See [Hybrid Pricing](page:introduction/basic-concepts/hybrid-pricing). | getSecondaryPricing(): ?UpdateSecondaryPricing | setSecondaryPricing(?UpdateSecondaryPricing secondaryPricing): void |
| `secondaryPricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Hybrid Pricing only. Alternative to `secondary_pricing.pricing_scheme`; when both are sent, `secondary_pricing.pricing_scheme` is used. | getSecondaryPricingScheme(): ?string | setSecondaryPricingScheme(?string secondaryPricingScheme): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;

$updateComponentPricePoint = UpdateComponentPricePointBuilder::init()
    ->name('name4')
    ->handle('handle0')
    ->pricingScheme(PricingScheme::STAIRSTEP)
    ->useSiteExchangeRate(false)
    ->taxIncluded(false)
    ->build();
```

