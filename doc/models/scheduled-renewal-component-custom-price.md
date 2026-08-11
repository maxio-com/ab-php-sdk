
# Scheduled Renewal Component Custom Price

Custom pricing for a component within a scheduled renewal.

## Structure

`ScheduledRenewalComponentCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | Omit for On/Off components. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`Price[]`](../../doc/models/price.md) | Required | On/off components only need one price bracket starting at 1. | getPrices(): array | setPrices(array prices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$scheduledRenewalComponentCustomPrice = ScheduledRenewalComponentCustomPriceBuilder::init(
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
    ->taxIncluded(false)
    ->build();
```

