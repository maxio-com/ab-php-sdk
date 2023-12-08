
# Subscription Group Prepayment Response

## Structure

`SubscriptionGroupPrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `amountInCents` | `?int` | Optional | The amount in cents of the entry. | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `endingBalanceInCents` | `?int` | Optional | The ending balance in cents of the account. | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |
| `entryType` | [`?string(ServiceCreditType)`](../../doc/models/service-credit-type.md) | Optional | The type of entry | getEntryType(): ?string | setEntryType(?string entryType): void |
| `memo` | `?string` | Optional | A memo attached to the entry. | getMemo(): ?string | setMemo(?string memo): void |

## Example (as JSON)

```json
{
  "id": 110,
  "amount_in_cents": 196,
  "ending_balance_in_cents": 236,
  "entry_type": "Credit",
  "memo": "memo2"
}
```

