
# Service Credit 1

## Structure

`ServiceCredit1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `amountInCents` | `?int` | Optional | The amount in cents of the entry | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `endingBalanceInCents` | `?int` | Optional | The new balance for the credit account | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |
| `entryType` | [`?string(ServiceCreditType)`](../../doc/models/service-credit-type.md) | Optional | The type of entry | getEntryType(): ?string | setEntryType(?string entryType): void |
| `memo` | `?string` | Optional | The memo attached to the entry | getMemo(): ?string | setMemo(?string memo): void |
| `invoiceUid` | `?string` | Optional | The invoice uid associated with the entry. Only present for debit entries | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `remainingBalanceInCents` | `?int` | Optional | The remaining balance for the entry | getRemainingBalanceInCents(): ?int | setRemainingBalanceInCents(?int remainingBalanceInCents): void |
| `createdAt` | `?DateTime` | Optional | The date and time the entry was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example (as JSON)

```json
{
  "id": 174,
  "amount_in_cents": 4,
  "ending_balance_in_cents": 44,
  "entry_type": "Credit",
  "memo": "memo8"
}
```

