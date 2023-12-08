
# Subscription Group Prepayment Request

## Structure

`SubscriptionGroupPrepaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayment` | [`SubscriptionGroupPrepayment`](../../doc/models/subscription-group-prepayment.md) | Required | - | getPrepayment(): SubscriptionGroupPrepayment | setPrepayment(SubscriptionGroupPrepayment prepayment): void |

## Example (as JSON)

```json
{
  "prepayment": {
    "amount": 136,
    "details": "details8",
    "memo": "memo2",
    "method": "paypal_account"
  }
}
```

