
# Preview Allocations Request

## Structure

`PreviewAllocationsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocations` | [`CreateAllocation[]`](../../doc/models/create-allocation.md) | Required | - | getAllocations(): array | setAllocations(array allocations): void |
| `effectiveProrationDate` | `?DateTime` | Optional | To calculate proration amounts for a future time. Only within a current subscription period. Only ISO8601 format is supported. | getEffectiveProrationDate(): ?\DateTime | setEffectiveProrationDate(?\DateTime effectiveProrationDate): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |

## Example (as JSON)

```json
{
  "allocations": [
    {
      "quantity": 26.48,
      "decimal_quantity": "decimal_quantity8",
      "previous_quantity": 55.5,
      "decimal_previous_quantity": "decimal_previous_quantity2",
      "component_id": 242,
      "memo": "memo6"
    }
  ],
  "effective_proration_date": "2023-12-01",
  "upgrade_charge": "none",
  "downgrade_credit": "prorated"
}
```

