
# Proforma Invoice Issued

## Structure

`ProformaInvoiceIssued`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `role` | `string` | Required | - | getRole(): string | setRole(string role): void |
| `deliveryDate` | `string` | Required | - | getDeliveryDate(): string | setDeliveryDate(string deliveryDate): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `dueAmount` | `string` | Required | - | getDueAmount(): string | setDueAmount(string dueAmount): void |
| `paidAmount` | `string` | Required | - | getPaidAmount(): string | setPaidAmount(string paidAmount): void |
| `taxAmount` | `string` | Required | - | getTaxAmount(): string | setTaxAmount(string taxAmount): void |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `productName` | `string` | Required | - | getProductName(): string | setProductName(string productName): void |
| `lineItems` | [`InvoiceLineItemEventData[]`](../../doc/models/invoice-line-item-event-data.md) | Required | - | getLineItems(): array | setLineItems(array lineItems): void |

## Example (as JSON)

```json
{
  "uid": "uid0",
  "number": "number2",
  "role": "role6",
  "delivery_date": "delivery_date0",
  "created_at": "created_at8",
  "due_amount": "due_amount2",
  "paid_amount": "paid_amount8",
  "tax_amount": "tax_amount6",
  "total_amount": "total_amount6",
  "product_name": "product_name6",
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

