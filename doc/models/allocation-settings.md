
# Allocation Settings

## Structure

`AllocationSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `accrueCharge` | `?string` | Optional | Either "true" or "false". | getAccrueCharge(): ?string | setAccrueCharge(?string accrueCharge): void |

## Example (as JSON)

```json
{
  "upgrade_charge": "none",
  "downgrade_credit": "prorated",
  "accrue_charge": "accrue_charge0"
}
```

