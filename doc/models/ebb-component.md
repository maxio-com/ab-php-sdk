
# EBB Component

## Structure

`EBBComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | A name for this component that is suitable for showing customers and displaying on billing statements, ie. "Minutes". | getName(): string | setName(string name): void |
| `unitName` | `string` | Required | The name of the unit of measurement for the component. It should be singular since it will be automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on a subscription’s component line-item | getUnitName(): string | setUnitName(string unitName): void |
| `description` | `?string` | Optional | A description for the component that will be displayed to the user on the hosted signup page. | getDescription(): ?string | setDescription(?string description): void |
| `handle` | `?string` | Optional | A unique identifier for your use that can be used to retrieve this component is subsequent requests.  Must start with a letter or number and may only contain lowercase letters, numbers, or the characters '.', ':', '-', or '_'.<br>**Constraints**: *Pattern*: `^[a-z0-9][a-z0-9\-_:.]*$` | getHandle(): ?string | setHandle(?string handle): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket Rules](https://maxio.zendesk.com/hc/en-us/articles/24261149166733-Component-Pricing-Schemes#price-bracket-rules) for an overview of how price brackets work for different pricing schemes. | getPrices(): ?array | setPrices(?array prices): void |
| `pricePoints` | [`?(ComponentPricePointItem[])`](../../doc/models/component-price-point-item.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `unitPrice` | string\|float\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `hideDateRangeOnInvoice` | `?bool` | Optional | (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range should show for the component on generated invoices. | getHideDateRangeOnInvoice(): ?bool | setHideDateRangeOnInvoice(?bool hideDateRangeOnInvoice): void |
| `eventBasedBillingMetricId` | `int` | Required | The ID of an event based billing metric that will be attached to this component. | getEventBasedBillingMetricId(): int | setEventBasedBillingMetricId(int eventBasedBillingMetricId): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component's default price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component's default price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "unit_name": "unit_name2",
  "description": "description0",
  "handle": "handle6",
  "taxable": false,
  "pricing_scheme": "per_unit",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ],
  "price_points": [
    {
      "name": "name2",
      "handle": "handle8",
      "pricing_scheme": "per_unit",
      "interval": 92,
      "interval_unit": "day"
    }
  ],
  "event_based_billing_metric_id": 190
}
```

