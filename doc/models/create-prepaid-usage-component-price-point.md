
# Create Prepaid Usage Component Price Point

## Structure

`CreatePrepaidUsageComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`Price[]`](../../doc/models/price.md) | Required | - | getPrices(): array | setPrices(array prices): void |
| `overagePricing` | [`OveragePricing`](../../doc/models/overage-pricing.md) | Required | - | getOveragePricing(): OveragePricing | setOveragePricing(OveragePricing overagePricing): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site.<br><br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `rolloverPrepaidRemainder` | `?bool` | Optional | (only for prepaid usage components) Boolean which controls whether or not remaining units should be rolled over to the next period. | getRolloverPrepaidRemainder(): ?bool | setRolloverPrepaidRemainder(?bool rolloverPrepaidRemainder): void |
| `renewPrepaidAllocation` | `?bool` | Optional | (only for prepaid usage components) Boolean which controls whether or not the allocated quantity should be renewed at the beginning of each period. | getRenewPrepaidAllocation(): ?bool | setRenewPrepaidAllocation(?bool renewPrepaidAllocation): void |
| `expirationInterval` | `?float` | Optional | (only for prepaid usage components where rollover_prepaid_remainder is true) The number of `expiration_interval_unit`s after which rollover amounts should expire. | getExpirationInterval(): ?float | setExpirationInterval(?float expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | (only for prepaid usage components where rollover_prepaid_remainder is true) A string representing the expiration interval unit for this component, either month or day. | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePrepaidUsageComponentPricePointBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;
use AdvancedBillingLib\Models\Builders\OveragePricingBuilder;

$createPrepaidUsageComponentPricePoint = CreatePrepaidUsageComponentPricePointBuilder::init(
    'name2',
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
    ],
    OveragePricingBuilder::init(
        PricingScheme::STAIRSTEP
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
                    ->build()
            ]
        )
        ->build()
)
    ->handle('handle8')
    ->useSiteExchangeRate(true)
    ->rolloverPrepaidRemainder(false)
    ->renewPrepaidAllocation(false)
    ->expirationInterval(165.7)
    ->build();
```

