
# Component Custom Price

Create or update custom pricing unique to the subscription. Used in place of `price_point_id`.

## Structure

`ComponentCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Omit for On/Off components | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | On/off components only need one price bracket starting at 1 | getPrices(): ?array | setPrices(?array prices): void |

## Example (as JSON)

```json
{
  "pricing_scheme": "stairstep",
  "interval": 162,
  "interval_unit": "day",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ]
}
```

