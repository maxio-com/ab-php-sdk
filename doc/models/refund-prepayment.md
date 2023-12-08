
# Refund Prepayment

## Structure

`RefundPrepayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountInCents` | `int` | Required | `amount` is not required if you pass `amount_in_cents`. | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `amount` | string\|float | Required | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMemo(): string | setMemo(string memo): void |
| `external` | `?bool` | Optional | Specify the type of refund you wish to initiate. When the prepayment is external, the `external` flag is optional. But if the prepayment was made through a payment profile, the `external` flag is required. | getExternal(): ?bool | setExternal(?bool external): void |

## Example (as JSON)

```json
{
  "amount_in_cents": 110,
  "amount": "String3",
  "memo": "memo4",
  "external": false
}
```

