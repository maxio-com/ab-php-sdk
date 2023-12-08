
# Create Usage Request

## Structure

`CreateUsageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usage` | [`CreateUsage`](../../doc/models/create-usage.md) | Required | - | getUsage(): CreateUsage | setUsage(CreateUsage usage): void |

## Example (as JSON)

```json
{
  "usage": {
    "quantity": 162.34,
    "price_point_id": "price_point_id0",
    "memo": "memo2",
    "billing_schedule": {
      "initial_billing_at": "2016-03-13"
    }
  }
}
```

