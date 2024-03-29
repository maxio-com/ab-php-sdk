
# Price Point

## Structure

`PricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site.<br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `overagePricing` | [`?OveragePricing`](../../doc/models/overage-pricing.md) | Optional | - | getOveragePricing(): ?OveragePricing | setOveragePricing(?OveragePricing overagePricing): void |
| `rolloverPrepaidRemainder` | `?bool` | Optional | Boolean which controls whether or not remaining units should be rolled over to the next period | getRolloverPrepaidRemainder(): ?bool | setRolloverPrepaidRemainder(?bool rolloverPrepaidRemainder): void |
| `renewPrepaidAllocation` | `?bool` | Optional | Boolean which controls whether or not the allocated quantity should be renewed at the beginning of each period | getRenewPrepaidAllocation(): ?bool | setRenewPrepaidAllocation(?bool renewPrepaidAllocation): void |
| `expirationInterval` | `?float` | Optional | (only for prepaid usage components where rollover_prepaid_remainder is true) The number of `expiration_interval_unit`s after which rollover amounts should expire | getExpirationInterval(): ?float | setExpirationInterval(?float expirationInterval): void |
| `expirationIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | - | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example (as JSON)

```json
{
  "use_site_exchange_rate": true,
  "name": "name0",
  "handle": "handle6",
  "pricing_scheme": "per_unit",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ]
}
```

