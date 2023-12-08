
# Prepayment

## Structure

`Prepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `amountInCents` | `int` | Required | - | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `remainingAmountInCents` | `int` | Required | - | getRemainingAmountInCents(): int | setRemainingAmountInCents(int remainingAmountInCents): void |
| `refundedAmountInCents` | `?int` | Optional | - | getRefundedAmountInCents(): ?int | setRefundedAmountInCents(?int refundedAmountInCents): void |
| `details` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDetails(): ?string | setDetails(?string details): void |
| `external` | `bool` | Required | - | getExternal(): bool | setExternal(bool external): void |
| `memo` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMemo(): string | setMemo(string memo): void |
| `paymentType` | [`?string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Optional | The payment type of the prepayment. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `createdAt` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCreatedAt(): string | setCreatedAt(string createdAt): void |

## Example (as JSON)

```json
{
  "id": 50,
  "subscription_id": 160,
  "amount_in_cents": 120,
  "remaining_amount_in_cents": 194,
  "refunded_amount_in_cents": 144,
  "details": "details4",
  "external": false,
  "memo": "memo8",
  "payment_type": "cash",
  "created_at": "created_at8"
}
```

