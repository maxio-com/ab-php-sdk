
# List Subcription Group Prepayment Item

## Structure

`ListSubcriptionGroupPrepaymentItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `subscriptionGroupUid` | `?string` | Optional | - | getSubscriptionGroupUid(): ?string | setSubscriptionGroupUid(?string subscriptionGroupUid): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `remainingAmountInCents` | `?int` | Optional | - | getRemainingAmountInCents(): ?int | setRemainingAmountInCents(?int remainingAmountInCents): void |
| `details` | `?string` | Optional | - | getDetails(): ?string | setDetails(?string details): void |
| `external` | `?bool` | Optional | - | getExternal(): ?bool | setExternal(?bool external): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `paymentType` | [`?string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example (as JSON)

```json
{
  "id": 254,
  "subscription_group_uid": "subscription_group_uid6",
  "amount_in_cents": 172,
  "remaining_amount_in_cents": 142,
  "details": "details2"
}
```

