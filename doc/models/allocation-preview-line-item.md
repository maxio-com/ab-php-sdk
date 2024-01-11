
# Allocation Preview Line Item

## Structure

`AllocationPreviewLineItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionType` | [`?string(LineItemTransactionType)`](../../doc/models/line-item-transaction-type.md) | Optional | A handle for the line item transaction type | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `kind` | [`?string(AllocationPreviewLineItemKind)`](../../doc/models/allocation-preview-line-item-kind.md) | Optional | A handle for the line item kind for allocation preview | getKind(): ?string | setKind(?string kind): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `discountAmountInCents` | `?int` | Optional | - | getDiscountAmountInCents(): ?int | setDiscountAmountInCents(?int discountAmountInCents): void |
| `taxableAmountInCents` | `?int` | Optional | - | getTaxableAmountInCents(): ?int | setTaxableAmountInCents(?int taxableAmountInCents): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `direction` | [`?string(AllocationPreviewDirection)`](../../doc/models/allocation-preview-direction.md) | Optional | Visible when using Fine-grained Component Control | getDirection(): ?string | setDirection(?string direction): void |

## Example (as JSON)

```json
{
  "transaction_type": "credit",
  "kind": "quantity_based_component",
  "amount_in_cents": 24,
  "memo": "memo6",
  "discount_amount_in_cents": 172
}
```

