
# Allocation

## Structure

`Allocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocationId` | `?int` | Optional | The allocation unique id | getAllocationId(): ?int | setAllocationId(?int allocationId): void |
| `componentId` | `?int` | Optional | The integer component ID for the allocation. This references a component that you have created in your Product setup | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | The handle of the component. This references a component that you have created in your Product setup | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `subscriptionId` | `?int` | Optional | The integer subscription ID for the allocation. This references a unique subscription in your Site | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `quantity` | int\|string\|null | Optional | This is a container for one-of cases. | getQuantity(): | setQuantity( quantity): void |
| `previousQuantity` | int\|string\|null | Optional | This is a container for one-of cases. | getPreviousQuantity(): | setPreviousQuantity( previousQuantity): void |
| `memo` | `?string` | Optional | The memo passed when the allocation was created | getMemo(): ?string | setMemo(?string memo): void |
| `timestamp` | `?DateTime` | Optional | The time that the allocation was recorded, in format and UTC timezone, i.e. 2012-11-20T22:00:37Z | getTimestamp(): ?\DateTime | setTimestamp(?\DateTime timestamp): void |
| `createdAt` | `?DateTime` | Optional | Timestamp indicating when this allocation was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `prorationUpgradeScheme` | `?string` | Optional | The scheme used if the proration was an upgrade. This is only present when the allocation was created mid-period. | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `prorationDowngradeScheme` | `?string` | Optional | The scheme used if the proration was a downgrade. This is only present when the allocation was created mid-period. | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `pricePointHandle` | `?string` | Optional | - | getPricePointHandle(): ?string | setPricePointHandle(?string pricePointHandle): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this component price point would renew every 30 days. This property is only available for sites with Multifrequency enabled. | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this component price point, either month or day. This property is only available for sites with Multifrequency enabled. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `previousPricePointId` | `?int` | Optional | - | getPreviousPricePointId(): ?int | setPreviousPricePointId(?int previousPricePointId): void |
| `accrueCharge` | `?bool` | Optional | If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal or if capture should be attempted immediately. | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `initiateDunning` | `?bool` | Optional | If true, if the immediate component payment fails, initiate dunning for the subscription.<br>Otherwise, leave the charges on the subscription to pay for at renewal. | getInitiateDunning(): ?bool | setInitiateDunning(?bool initiateDunning): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `payment` | [PaymentForAllocation](../../doc/models/payment-for-allocation.md)\|null | Optional | This is a container for one-of cases. | getPayment(): ?PaymentForAllocation | setPayment(?PaymentForAllocation payment): void |
| `expiresAt` | `?DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `usedQuantity` | `?int` | Optional | - | getUsedQuantity(): ?int | setUsedQuantity(?int usedQuantity): void |
| `chargeId` | `?int` | Optional | - | getChargeId(): ?int | setChargeId(?int chargeId): void |

## Example (as JSON)

```json
{
  "allocation_id": 102,
  "component_id": 144,
  "component_handle": "component_handle0",
  "subscription_id": 144,
  "quantity": 168
}
```

