
# Renewal Preview Line Item

## Structure

`RenewalPreviewLineItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionType` | [`?string(LineItemTransactionType)`](../../doc/models/line-item-transaction-type.md) | Optional | A handle for the line item transaction type | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `kind` | [`?string(LineItemKind)`](../../doc/models/line-item-kind.md) | Optional | A handle for the line item kind | getKind(): ?string | setKind(?string kind): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `discountAmountInCents` | `?int` | Optional | - | getDiscountAmountInCents(): ?int | setDiscountAmountInCents(?int discountAmountInCents): void |
| `taxableAmountInCents` | `?int` | Optional | - | getTaxableAmountInCents(): ?int | setTaxableAmountInCents(?int taxableAmountInCents): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `productName` | `?string` | Optional | - | getProductName(): ?string | setProductName(?string productName): void |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `componentHandle` | `?string` | Optional | - | getComponentHandle(): ?string | setComponentHandle(?string componentHandle): void |
| `componentName` | `?string` | Optional | - | getComponentName(): ?string | setComponentName(?string componentName): void |
| `productHandle` | `?string` | Optional | - | getProductHandle(): ?string | setProductHandle(?string productHandle): void |
| `periodRangeStart` | `?string` | Optional | - | getPeriodRangeStart(): ?string | setPeriodRangeStart(?string periodRangeStart): void |
| `periodRangeEnd` | `?string` | Optional | - | getPeriodRangeEnd(): ?string | setPeriodRangeEnd(?string periodRangeEnd): void |

## Example (as JSON)

```json
{
  "transaction_type": "charge",
  "kind": "prepaid_usage_component",
  "amount_in_cents": 154,
  "memo": "memo0",
  "discount_amount_in_cents": 214
}
```

