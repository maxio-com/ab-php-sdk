
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
    "start_date": "2016-03-13T12:52:32.123Z",
    "end_date": "2016-03-13T12:52:32.123Z",
    "subtotal_in_cents": 240,
    "total_tax_in_cents": 108,
    "total_discount_in_cents": 142
  }
}
```

