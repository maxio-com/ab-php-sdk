
# Allocation Payment

Information for captured payment, if applicable

## Structure

`AllocationPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `success` | `?bool` | Optional | - | getSuccess(): ?bool | setSuccess(?bool success): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example (as JSON)

```json
{
  "id": 146,
  "amount_in_cents": 232,
  "success": false,
  "memo": "memo2"
}
```

