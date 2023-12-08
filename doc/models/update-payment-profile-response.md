
# Update Payment Profile Response

## Structure

`UpdatePaymentProfileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`UpdatedPaymentProfile`](../../doc/models/updated-payment-profile.md) | Required | - | getPaymentProfile(): UpdatedPaymentProfile | setPaymentProfile(UpdatedPaymentProfile paymentProfile): void |

## Example (as JSON)

```json
{
  "payment_profile": {
    "id": 44,
    "first_name": "first_name4",
    "last_name": "last_name2",
    "card_type": "card_type0",
    "expiration_month": 38
  }
}
```

