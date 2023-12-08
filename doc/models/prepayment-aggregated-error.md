
# Prepayment Aggregated Error

## Structure

`PrepaymentAggregatedError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountInCents` | `?(string[])` | Optional | - | getAmountInCents(): ?array | setAmountInCents(?array amountInCents): void |
| `base` | `?(string[])` | Optional | - | getBase(): ?array | setBase(?array base): void |
| `external` | `?(string[])` | Optional | - | getExternal(): ?array | setExternal(?array external): void |

## Example (as JSON)

```json
{
  "amount_in_cents": [
    "amount_in_cents7",
    "amount_in_cents6",
    "amount_in_cents5"
  ],
  "base": [
    "base7",
    "base8"
  ],
  "external": [
    "external0",
    "external1",
    "external2"
  ]
}
```

