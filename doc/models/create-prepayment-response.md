
# Create Prepayment Response

## Structure

`CreatePrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`CreatedPrepayment`](../../doc/models/created-prepayment.md) | Required | - | getPrepayment(): CreatedPrepayment | setPrepayment(CreatedPrepayment prepayment): void |

## Example (as JSON)

```json
{
  "prepayment": {
    "id": 38,
    "subscription_id": 148,
    "amount_in_cents": 124,
    "memo": "memo2",
    "created_at": "created_at6"
  }
}
```

