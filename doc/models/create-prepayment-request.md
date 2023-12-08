
# Create Prepayment Request

## Structure

`CreatePrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`CreatePrepayment`](../../doc/models/create-prepayment.md) | Required | - | getPrepayment(): CreatePrepayment | setPrepayment(CreatePrepayment prepayment): void |

## Example (as JSON)

```json
{
  "prepayment": {
    "amount": 11.6,
    "details": "details8",
    "memo": "memo2",
    "method": "cash",
    "payment_profile_id": 240
  }
}
```

