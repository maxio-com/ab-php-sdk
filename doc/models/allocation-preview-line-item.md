
# Allocation Preview Line Item

## Structure

`AllocationPreviewLineItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionType` | `?string` | Optional | - | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `discountAmountInCents` | `?int` | Optional | - | getDiscountAmountInCents(): ?int | setDiscountAmountInCents(?int discountAmountInCents): void |
| `taxableAmountInCents` | `?int` | Optional | - | getTaxableAmountInCents(): ?int | setTaxableAmountInCents(?int taxableAmountInCents): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `direction` | `?string` | Optional | - | getDirection(): ?string | setDirection(?string direction): void |

## Example (as JSON)

```json
{
  "transaction_type": "transaction_type4",
  "kind": "kind0",
  "amount_in_cents": 24,
  "memo": "memo6",
  "discount_amount_in_cents": 172
}
```

