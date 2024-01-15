
# Allocation Preview Item

## Structure

`AllocationPreviewItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `quantity` | int\|string\|null | Optional | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `previousQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getPreviousQuantity(): | setPreviousQuantity( previousQuantity): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `timestamp` | `?string` | Optional | - | getTimestamp(): ?string | setTimestamp(?string timestamp): void |
| `prorationUpgradeScheme` | `?string` | Optional | - | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `prorationDowngradeScheme` | `?string` | Optional | - | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `accrueCharge` | `?bool` | Optional | - | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `previousPricePointId` | `?int` | Optional | - | getPreviousPricePointId(): ?int | setPreviousPricePointId(?int previousPricePointId): void |
| `pricePointHandle` | `?string` | Optional | - | getPricePointHandle(): ?string | setPricePointHandle(?string pricePointHandle): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |

## Example (as JSON)

```json
{
  "component_id": 54,
  "subscription_id": 54,
  "quantity": 78,
  "previous_quantity": 192,
  "memo": "memo6"
}
```

