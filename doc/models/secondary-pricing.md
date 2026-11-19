
# Secondary Pricing

Hybrid Pricing only. The secondary pricing model that takes over once usage passes the primary model's included threshold. Applies to Quantity-Based and Metered Components on Sites with Hybrid Pricing enabled; ignored otherwise. Its `prices` brackets start at `1`, not at the primary model's highest `ending_quantity`. See [Hybrid Pricing](page:introduction/basic-concepts/hybrid-pricing).

## Structure

`SecondaryPricing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Required, unless you send the top-level `secondary_pricing_scheme` instead (Create and Update Component Price Point only). A block with neither returns `422` (`Secondary pricing scheme must be defined`). | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SecondaryPricingBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$secondaryPricing = SecondaryPricingBuilder::init()
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

