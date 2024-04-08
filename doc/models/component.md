
# Component

## Structure

`Component`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The unique ID assigned to the component by Chargify. This ID can be used to fetch the component from the API. | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | The name of the Component, suitable for display on statements. i.e. Text Messages. | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | The component API handle | getHandle(): ?string | setHandle(?string handle): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | - | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `unitName` | `?string` | Optional | The name of the unit that the component’s usage is measured in. i.e. message | getUnitName(): ?string | setUnitName(?string unitName): void |
| `unitPrice` | `?string` | Optional | The amount the customer will be charged per unit. This field is only populated for ‘per_unit’ pricing schemes, otherwise it may be null. | getUnitPrice(): ?string | setUnitPrice(?string unitPrice): void |
| `productFamilyId` | `?int` | Optional | The id of the Product Family to which the Component belongs | getProductFamilyId(): ?int | setProductFamilyId(?int productFamilyId): void |
| `productFamilyName` | `?string` | Optional | The name of the Product Family to which the Component belongs | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `pricePerUnitInCents` | `?int` | Optional | deprecated - use unit_price instead | getPricePerUnitInCents(): ?int | setPricePerUnitInCents(?int pricePerUnitInCents): void |
| `kind` | [`?string(ComponentKind)`](../../doc/models/component-kind.md) | Optional | A handle for the component type | getKind(): ?string | setKind(?string kind): void |
| `archived` | `?bool` | Optional | Boolean flag describing whether a component is archived or not. | getArchived(): ?bool | setArchived(?bool archived): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `description` | `?string` | Optional | The description of the component. | getDescription(): ?string | setDescription(?string description): void |
| `defaultPricePointId` | `?int` | Optional | - | getDefaultPricePointId(): ?int | setDefaultPricePointId(?int defaultPricePointId): void |
| `overagePrices` | [`?(ComponentPrice[])`](../../doc/models/component-price.md) | Optional | An array of price brackets. If the component uses the ‘per_unit’ pricing scheme, this array will be empty. | getOveragePrices(): ?array | setOveragePrices(?array overagePrices): void |
| `prices` | [`?(ComponentPrice[])`](../../doc/models/component-price.md) | Optional | An array of price brackets. If the component uses the ‘per_unit’ pricing scheme, this array will be empty. | getPrices(): ?array | setPrices(?array prices): void |
| `pricePointCount` | `?int` | Optional | Count for the number of price points associated with the component | getPricePointCount(): ?int | setPricePointCount(?int pricePointCount): void |
| `pricePointsUrl` | `?string` | Optional | URL that points to the location to read the existing price points via GET request | getPricePointsUrl(): ?string | setPricePointsUrl(?string pricePointsUrl): void |
| `defaultPricePointName` | `?string` | Optional | - | getDefaultPricePointName(): ?string | setDefaultPricePointName(?string defaultPricePointName): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `createdAt` | `?DateTime` | Optional | Timestamp indicating when this component was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Timestamp indicating when this component was updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `archivedAt` | `?DateTime` | Optional | Timestamp indicating when this component was archived | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `hideDateRangeOnInvoice` | `?bool` | Optional | (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range should show for the component on generated invoices. | getHideDateRangeOnInvoice(): ?bool | setHideDateRangeOnInvoice(?bool hideDateRangeOnInvoice): void |
| `allowFractionalQuantities` | `?bool` | Optional | - | getAllowFractionalQuantities(): ?bool | setAllowFractionalQuantities(?bool allowFractionalQuantities): void |
| `itemCategory` | [`?string(ItemCategory)`](../../doc/models/item-category.md) | Optional | One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other | getItemCategory(): ?string | setItemCategory(?string itemCategory): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `accountingCode` | `?string` | Optional | E.g. Internal ID or SKU Number | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `eventBasedBillingMetricId` | `?int` | Optional | (Only for Event Based Components) This is an ID of a metric attached to the component. This metric is used to bill upon collected events. | getEventBasedBillingMetricId(): ?int | setEventBasedBillingMetricId(?int eventBasedBillingMetricId): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component's default price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component's default price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |

## Example (as JSON)

```json
{
  "item_category": "Business Software",
  "id": 24,
  "name": "name2",
  "handle": "handle8",
  "pricing_scheme": "per_unit",
  "unit_name": "unit_name4"
}
```

