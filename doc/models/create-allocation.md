
# Create Allocation

## Structure

`CreateAllocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `float` | Required | The allocated quantity to which to set the line-items allocated quantity. By default, this is an integer. If decimal allocations are enabled for the component, it will be a decimal number. For On/Off components, use 1for on and 0 for off. | getQuantity(): float | setQuantity(float quantity): void |
| `componentId` | `?int` | Optional | (required for the multiple allocations endpoint) The id associated with the component for which the allocation is being made | getComponentId(): ?int | setComponentId(?int componentId): void |
| `memo` | `?string` | Optional | A memo to record along with the allocation | getMemo(): ?string | setMemo(?string memo): void |
| `prorationDowngradeScheme` | `?string` | Optional | The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided. | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `prorationUpgradeScheme` | `?string` | Optional | The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided. | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `accrueCharge` | `?bool` | Optional | If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal or if capture should be attempted immediately. Defaults to the site setting if one is not provided. | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `billingSchedule` | [`?BillingSchedule`](../../doc/models/billing-schedule.md) | Optional | This attribute is particularly useful when you need to align billing events for different components on distinct schedules within a subscription. Please note this only works for site with Multifrequency enabled | getBillingSchedule(): ?BillingSchedule | setBillingSchedule(?BillingSchedule billingSchedule): void |

## Example (as JSON)

```json
{
  "quantity": 8.06,
  "component_id": 192,
  "memo": "memo4",
  "proration_downgrade_scheme": "proration_downgrade_scheme2",
  "proration_upgrade_scheme": "proration_upgrade_scheme4",
  "accrue_charge": false
}
```

