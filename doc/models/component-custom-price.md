
# Component Custom Price

Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.

## Structure

`ComponentCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `taxIncluded` | `?bool` | Optional | Whether or not the price point includes tax | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Omit for On/Off components | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `prices` | [`Price[]`](../../doc/models/price.md) | Required | On/off components only need one price bracket starting at 1 | getPrices(): array | setPrices(array prices): void |
| `renewPrepaidAllocation` | `?bool` | Optional | Applicable only to prepaid usage components. Controls whether the allocated quantity renews each period. | getRenewPrepaidAllocation(): ?bool | setRenewPrepaidAllocation(?bool renewPrepaidAllocation): void |
| `rolloverPrepaidRemainder` | `?bool` | Optional | Applicable only to prepaid usage components. Controls whether remaining units roll over to the next period. | getRolloverPrepaidRemainder(): ?bool | setRolloverPrepaidRemainder(?bool rolloverPrepaidRemainder): void |
| `expirationInterval` | `?int` | Optional | Applicable only when rollover is enabled. Number of `expiration_interval_unit`s after which rollover amounts expire. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | Applicable only when rollover is enabled. Interval unit for rollover expiration (month or day). | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example (as JSON)

```json
{
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ],
  "tax_included": false,
  "pricing_scheme": "stairstep",
  "interval": 162,
  "interval_unit": "day",
  "renew_prepaid_allocation": false
}
```

