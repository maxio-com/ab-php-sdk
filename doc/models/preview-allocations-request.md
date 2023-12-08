
# Preview Allocations Request

## Structure

`PreviewAllocationsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocations` | [`CreateAllocation[]`](../../doc/models/create-allocation.md) | Required | - | getAllocations(): array | setAllocations(array allocations): void |
| `effectiveProrationDate` | `?string` | Optional | To calculate proration amounts for a future time. Only within a current subscription period. Only ISO8601 format is supported. | getEffectiveProrationDate(): ?string | setEffectiveProrationDate(?string effectiveProrationDate): void |

## Example (as JSON)

```json
{
  "allocations": [
    {
      "quantity": 26.48,
      "component_id": 242,
      "memo": "memo6",
      "proration_downgrade_scheme": "proration_downgrade_scheme0",
      "proration_upgrade_scheme": "proration_upgrade_scheme2",
      "accrue_charge": false
    }
  ],
  "effective_proration_date": "2023-12-01"
}
```

