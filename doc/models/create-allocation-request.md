
# Create Allocation Request

## Structure

`CreateAllocationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocation` | [`CreateAllocation`](../../doc/models/create-allocation.md) | Required | - | getAllocation(): CreateAllocation | setAllocation(CreateAllocation allocation): void |

## Example (as JSON)

```json
{
  "allocation": {
    "quantity": 228.94,
    "decimal_quantity": "decimal_quantity6",
    "previous_quantity": 254.04,
    "decimal_previous_quantity": "decimal_previous_quantity8",
    "component_id": 8,
    "memo": "memo2"
  }
}
```

