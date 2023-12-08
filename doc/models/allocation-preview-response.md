
# Allocation Preview Response

## Structure

`AllocationPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allocationPreview` | [`AllocationPreview`](../../doc/models/allocation-preview.md) | Required | - | getAllocationPreview(): AllocationPreview | setAllocationPreview(AllocationPreview allocationPreview): void |

## Example (as JSON)

```json
{
  "allocation_preview": {
    "start_date": "start_date0",
    "end_date": "end_date6",
    "subtotal_in_cents": 240,
    "total_tax_in_cents": 108,
    "total_discount_in_cents": 142
  }
}
```

