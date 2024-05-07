
# Subscription Component

## Structure

`SubscriptionComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `kind` | [`?string(ComponentKind)`](../../doc/models/component-kind.md) | Optional | A handle for the component type | getKind(): ?string | setKind(?string kind): void |
| `unitName` | `?string` | Optional | - | getUnitName(): ?string | setUnitName(?string unitName): void |
| `enabled` | `?bool` | Optional | (for on/off components) indicates if the component is enabled for the subscription | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `unitBalance` | `?int` | Optional | - | getUnitBalance(): ?int | setUnitBalance(?int unitBalance): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `allocatedQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getAllocatedQuantity(): | setAllocatedQuantity( allocatedQuantity): void |
| `pricingScheme` | [`?string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Optional | - | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `archivedAt` | `?DateTime` | Optional | - | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `pricePointHandle` | `?string` | Optional | - | getPricePointHandle(): ?string | setPricePointHandle(?string pricePointHandle): void |
| `pricePointType` | [`?string(PricePointType)`](../../doc/models/price-point-type.md) | Optional | - | getPricePointType(): ?string | setPricePointType(?string pricePointType): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `productFamilyId` | `?int` | Optional | - | getProductFamilyId(): ?int | setProductFamilyId(?int productFamilyId): void |
| `productFamilyHandle` | `?string` | Optional | - | getProductFamilyHandle(): ?string | setProductFamilyHandle(?string productFamilyHandle): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `allowFractionalQuantities` | `?bool` | Optional | - | getAllowFractionalQuantities(): ?bool | setAllowFractionalQuantities(?bool allowFractionalQuantities): void |
| `subscription` | [`?SubscriptionComponentSubscription`](../../doc/models/subscription-component-subscription.md) | Optional | An optional object, will be returned if provided `include=subscription` query param. | getSubscription(): ?SubscriptionComponentSubscription | setSubscription(?SubscriptionComponentSubscription subscription): void |
| `historicUsages` | [`?(HistoricUsage[])`](../../doc/models/historic-usage.md) | Optional | - | getHistoricUsages(): ?array | setHistoricUsages(?array historicUsages): void |
| `displayOnHostedPage` | `?bool` | Optional | - | getDisplayOnHostedPage(): ?bool | setDisplayOnHostedPage(?bool displayOnHostedPage): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of '30' coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |

## Example (as JSON)

```json
{
  "id": 20,
  "name": "name8",
  "kind": "quantity_based_component",
  "unit_name": "unit_name0",
  "enabled": false
}
```

