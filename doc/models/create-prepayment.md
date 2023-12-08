
# Create Prepayment

## Structure

`CreatePrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `float` | Required | - | getAmount(): float | setAmount(float amount): void |
| `details` | `string` | Required | - | getDetails(): string | setDetails(string details): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `method` | [`string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Required | :- When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected using the default credit card payment profile and applied to the prepayment account balance. This is especially useful for manual replenishment of prepaid subscriptions. | getMethod(): string | setMethod(string method): void |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |

## Example (as JSON)

```json
{
  "amount": 23.92,
  "details": "details6",
  "memo": "memo0",
  "method": "paypal_account",
  "payment_profile_id": 240
}
```

