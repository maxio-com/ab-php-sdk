
# Update Payment Profile Request

## Structure

`UpdatePaymentProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`UpdatePaymentProfile`](../../doc/models/update-payment-profile.md) | Required | - | getPaymentProfile(): UpdatePaymentProfile | setPaymentProfile(UpdatePaymentProfile paymentProfile): void |

## Example (as JSON)

```json
{
  "payment_profile": {
    "full_number": "5424000000000015",
    "first_name": "first_name4",
    "last_name": "last_name2",
    "card_type": "bogus",
    "expiration_month": "expiration_month0"
  }
}
```

