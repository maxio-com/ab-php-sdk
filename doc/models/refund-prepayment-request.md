
# Refund Prepayment Request

## Structure

`RefundPrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refund` | [`RefundPrepayment`](../../doc/models/refund-prepayment.md) | Required | - | getRefund(): RefundPrepayment | setRefund(RefundPrepayment refund): void |

## Example (as JSON)

```json
{
  "refund": {
    "amount_in_cents": 132,
    "amount": "String1",
    "memo": "memo2",
    "external": false
  }
}
```

