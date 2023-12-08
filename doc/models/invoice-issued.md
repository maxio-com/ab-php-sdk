
# Invoice Issued

## Structure

`InvoiceIssued`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `role` | `string` | Required | - | getRole(): string | setRole(string role): void |
| `dueDate` | `string` | Required | - | getDueDate(): string | setDueDate(string dueDate): void |
| `issueDate` | `string` | Required | - | getIssueDate(): string | setIssueDate(string issueDate): void |
| `paidDate` | `string` | Required | - | getPaidDate(): string | setPaidDate(string paidDate): void |
| `dueAmount` | `string` | Required | - | getDueAmount(): string | setDueAmount(string dueAmount): void |
| `paidAmount` | `string` | Required | - | getPaidAmount(): string | setPaidAmount(string paidAmount): void |
| `taxAmount` | `string` | Required | - | getTaxAmount(): string | setTaxAmount(string taxAmount): void |
| `refundAmount` | `string` | Required | - | getRefundAmount(): string | setRefundAmount(string refundAmount): void |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `statusAmount` | `string` | Required | - | getStatusAmount(): string | setStatusAmount(string statusAmount): void |
| `productName` | `string` | Required | - | getProductName(): string | setProductName(string productName): void |
| `consolidationLevel` | `string` | Required | - | getConsolidationLevel(): string | setConsolidationLevel(string consolidationLevel): void |
| `lineItems` | [`InvoiceLineItemEventData[]`](../../doc/models/invoice-line-item-event-data.md) | Required | - | getLineItems(): array | setLineItems(array lineItems): void |

## Example (as JSON)

```json
{
  "uid": "uid4",
  "number": "number8",
  "role": "role2",
  "due_date": "due_date2",
  "issue_date": "issue_date0",
  "paid_date": "paid_date6",
  "due_amount": "due_amount6",
  "paid_amount": "paid_amount4",
  "tax_amount": "tax_amount2",
  "refund_amount": "refund_amount0",
  "total_amount": "total_amount0",
  "status_amount": "status_amount4",
  "product_name": "product_name0",
  "consolidation_level": "consolidation_level4",
  "line_items": [
    {
      "uid": "uid8",
      "title": "title4",
      "description": "description8",
      "quantity": 102,
      "quantity_delta": 204
    }
  ]
}
```

