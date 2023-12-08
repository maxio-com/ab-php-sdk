
# Allocation

## Structure

`Allocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | The integer component ID for the allocation. This references a component that you have created in your Product setup | getComponentId(): ?int | setComponentId(?int componentId): void |
| `subscriptionId` | `?int` | Optional | The integer subscription ID for the allocation. This references a unique subscription in your Site | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `quantity` | `?int` | Optional | The allocated quantity set in to effect by the allocation | getQuantity(): ?int | setQuantity(?int quantity): void |
| `previousQuantity` | `?int` | Optional | The allocated quantity that was in effect before this allocation was created | getPreviousQuantity(): ?int | setPreviousQuantity(?int previousQuantity): void |
| `memo` | `?string` | Optional | The memo passed when the allocation was created | getMemo(): ?string | setMemo(?string memo): void |
| `timestamp` | `?string` | Optional | The time that the allocation was recorded, in  format and UTC timezone, i.e. 2012-11-20T22:00:37Z | getTimestamp(): ?string | setTimestamp(?string timestamp): void |
| `prorationUpgradeScheme` | `?string` | Optional | The scheme used if the proration was an upgrade. This is only present when the allocation was created mid-period. | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `prorationDowngradeScheme` | `?string` | Optional | The scheme used if the proration was a downgrade. This is only present when the allocation was created mid-period. | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `pricePointHandle` | `?string` | Optional | - | getPricePointHandle(): ?string | setPricePointHandle(?string pricePointHandle): void |
| `previousPricePointId` | `?int` | Optional | - | getPreviousPricePointId(): ?int | setPreviousPricePointId(?int previousPricePointId): void |
| `accrueCharge` | `?bool` | Optional | If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal or if capture should be attempted immediately. | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `payment` | [AllocationPayment](../../doc/models/allocation-payment.md)\|null | Optional | This is a container for one-of cases. | getPayment(): ?AllocationPayment | setPayment(?AllocationPayment payment): void |

## Example (as JSON)

```json
{
  "component_id": 144,
  "subscription_id": 144,
  "quantity": 246,
  "previous_quantity": 180,
  "memo": "memo4"
}
```

