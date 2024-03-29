
# Created Prepayment

## Structure

`CreatedPrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | **Constraints**: `>= 1` | getId(): ?int | setId(?int id): void |
| `subscriptionId` | `?int` | Optional | **Constraints**: `>= 1` | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `amountInCents` | `?int` | Optional | **Constraints**: `>= 0.01` | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `startingBalanceInCents` | `?int` | Optional | **Constraints**: `>= 0` | getStartingBalanceInCents(): ?int | setStartingBalanceInCents(?int startingBalanceInCents): void |
| `endingBalanceInCents` | `?int` | Optional | - | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |

## Example (as JSON)

```json
{
  "id": 110,
  "subscription_id": 220,
  "amount_in_cents": 196,
  "memo": "memo6",
  "created_at": "2016-03-13T12:52:32.123Z"
}
```

