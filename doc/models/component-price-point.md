
# Component Price Point

## Structure

`ComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `type` | [`?string(PricePointType)`](../../doc/models/price-point-type.md) | Optional | Price point type. We expose the following types:<br><br>1. **default**: a price point that is marked as a default price for a certain product.<br>2. **custom**: a custom price point.<br>3. **catalog**: a price point that is **not** marked as a default price for a certain product and is **not** a custom one. | getType(): ?string | setType(?string type): void |
| `default` | `?bool` | Optional | Note: Refer to type attribute instead | getDefault(): ?bool | setDefault(?bool default): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `archivedAt` | `?DateTime` | Optional | - | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `prices` | [`?(ComponentPrice[])`](../../doc/models/component-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether to use the site level exchange rate or define your own prices for each currency if you have multiple currencies defined on the site. Defaults to true during creation. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `subscriptionId` | `?int` | Optional | (only used for Custom Pricing - ie. when the price point's type is `custom`) The id of the subscription that the custom price point is for. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `taxIncluded` | `?bool` | Optional | - | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `currencyPrices` | [`?(ComponentCurrencyPrice[])`](../../doc/models/component-currency-price.md) | Optional | An array of currency pricing data is available when multiple currencies are defined for the site. It varies based on the use_site_exchange_rate setting for the price point. This parameter is present only in the response of read endpoints, after including the appropriate query parameter. | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |
| `overagePrices` | [`?(ComponentPrice[])`](../../doc/models/component-price.md) | Optional | Applicable only to prepaid usage components. An array of overage price brackets. | getOveragePrices(): ?array | setOveragePrices(?array overagePrices): void |
| `overagePricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | Applicable only to prepaid usage components. Pricing scheme for overage pricing. | getOveragePricingScheme(): ?string | setOveragePricingScheme(?string overagePricingScheme): void |
| `renewPrepaidAllocation` | `?bool` | Optional | Applicable only to prepaid usage components. Boolean which controls whether or not the allocated quantity should be renewed at the beginning of each period. | getRenewPrepaidAllocation(): ?bool | setRenewPrepaidAllocation(?bool renewPrepaidAllocation): void |
| `rolloverPrepaidRemainder` | `?bool` | Optional | Applicable only to prepaid usage components. Boolean which controls whether or not remaining units should be rolled over to the next period. | getRolloverPrepaidRemainder(): ?bool | setRolloverPrepaidRemainder(?bool rolloverPrepaidRemainder): void |
| `expirationInterval` | `?int` | Optional | Applicable only to prepaid usage components where rollover_prepaid_remainder is true. The number of `expiration_interval_unit`s after which rollover amounts should expire. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | Applicable only to prepaid usage components where rollover_prepaid_remainder is true. A string representing the expiration interval unit for this component, either month or day. | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example (as JSON)

```json
{
  "id": 190,
  "type": "custom",
  "default": false,
  "name": "name2",
  "pricing_scheme": "stairstep"
}
```

