
# Create Allocation

## Structure

`CreateAllocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `float` | Required | The allocated quantity to which to set the line-items allocated quantity. By default, this is an integer. If decimal allocations are enabled for the component, it will be a decimal number. For On/Off components, use 1for on and 0 for off. | getQuantity(): float | setQuantity(float quantity): void |
| `decimalQuantity` | `?string` | Optional | Decimal representation of the allocated quantity. Only valid when decimal<br>allocations are enabled for the component. | getDecimalQuantity(): ?string | setDecimalQuantity(?string decimalQuantity): void |
| `previousQuantity` | `?float` | Optional | The quantity that was in effect before this allocation. Responses always<br>include this value; it may be supplied on preview requests to ensure the<br>expected change is evaluated. | getPreviousQuantity(): ?float | setPreviousQuantity(?float previousQuantity): void |
| `decimalPreviousQuantity` | `?string` | Optional | Decimal representation of `previous_quantity`. Only valid when decimal<br>allocations are enabled for the component. | getDecimalPreviousQuantity(): ?string | setDecimalPreviousQuantity(?string decimalPreviousQuantity): void |
| `componentId` | `?int` | Optional | (required for the multiple allocations endpoint) The id associated with the component for which the allocation is being made. | getComponentId(): ?int | setComponentId(?int componentId): void |
| `memo` | `?string` | Optional | A memo to record along with the allocation. | getMemo(): ?string | setMemo(?string memo): void |
| `prorationDowngradeScheme` | `?string` | Optional | The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided. | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `prorationUpgradeScheme` | `?string` | Optional | The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided. | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `downgradeCredit` | [`?string(DowngradeCreditCreditType)`](../../doc/models/downgrade-credit-credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. Values are:<br><br>`full` -  A full price credit is added for the amount owed.<br><br>`prorated` - A prorated credit is added for the amount owed.<br><br>`none` - No charge is added. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `upgradeCharge` | [`?string(UpgradeChargeCreditType)`](../../doc/models/upgrade-charge-credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. Values are:<br><br>`full` - A charge is added for the full price of the component.<br><br>`prorated` - A charge is added for the prorated price of the component change.<br><br>`none` - No charge is added. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `accrueCharge` | `?bool` | Optional | "If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal or if capture should be attempted immediately.<br><br>`true` - Attempt to charge the customer at the next renewal.<br><br>`false` - Attempt to charge the customer right away. If it fails, the charge will be accrued until the next renewal.<br><br>Defaults to the site setting if unspecified in the request. | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `initiateDunning` | `?bool` | Optional | If set to true, if the immediate component payment fails, initiate dunning for the subscription.<br>Otherwise, leave the charges on the subscription to pay for at renewal. Defaults to false. | getInitiateDunning(): ?bool | setInitiateDunning(?bool initiateDunning): void |
| `pricePointId` | string\|int\|null | Optional | This is a container for one-of cases. | getPricePointId(): | setPricePointId( pricePointId): void |
| `billingSchedule` | [`?BillingSchedule`](../../doc/models/billing-schedule.md) | Optional | This attribute is particularly useful when you need to align billing events for different components on distinct schedules within a subscription. This only works for site with Multifrequency enabled. | getBillingSchedule(): ?BillingSchedule | setBillingSchedule(?BillingSchedule billingSchedule): void |
| `customPrice` | [`?ComponentCustomPrice`](../../doc/models/component-custom-price.md) | Optional | Create or update custom pricing unique to the subscription. Used in place of `price_point_id`. | getCustomPrice(): ?ComponentCustomPrice | setCustomPrice(?ComponentCustomPrice customPrice): void |

## Example (as JSON)

```json
{
  "quantity": 8.06,
  "decimal_quantity": "decimal_quantity4",
  "previous_quantity": 218.92,
  "decimal_previous_quantity": "decimal_previous_quantity0",
  "component_id": 192,
  "memo": "memo4"
}
```

