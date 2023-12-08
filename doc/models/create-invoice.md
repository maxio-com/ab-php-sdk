
# Create Invoice

## Structure

`CreateInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lineItems` | [`?(CreateInvoiceItem[])`](../../doc/models/create-invoice-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `issueDate` | `?string` | Optional | - | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `netTerms` | `?int` | Optional | By default, invoices will be created with a due date matching the date of invoice creation. If a different due date is desired, the net_terms parameter can be sent indicating the number of days in advance the due date should be. | getNetTerms(): ?int | setNetTerms(?int netTerms): void |
| `paymentInstructions` | `?string` | Optional | - | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `memo` | `?string` | Optional | A custom memo can be sent to override the site's default. | getMemo(): ?string | setMemo(?string memo): void |
| `sellerAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Overrides the defaults for the site | getSellerAddress(): ?CreateInvoiceAddress | setSellerAddress(?CreateInvoiceAddress sellerAddress): void |
| `billingAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Overrides the default for the customer | getBillingAddress(): ?CreateInvoiceAddress | setBillingAddress(?CreateInvoiceAddress billingAddress): void |
| `shippingAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Overrides the default for the customer | getShippingAddress(): ?CreateInvoiceAddress | setShippingAddress(?CreateInvoiceAddress shippingAddress): void |
| `coupons` | [`?(CreateInvoiceCoupon[])`](../../doc/models/create-invoice-coupon.md) | Optional | - | getCoupons(): ?array | setCoupons(?array coupons): void |
| `status` | [`?string(Status1)`](../../doc/models/status-1.md) | Optional | **Default**: `Status1::OPEN` | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "status": "draft",
  "line_items": [
    {
      "title": "title4",
      "quantity": 56.68,
      "unit_price": 39.9,
      "taxable": false,
      "tax_code": "tax_code6"
    }
  ],
  "issue_date": "issue_date2",
  "net_terms": 18,
  "payment_instructions": "payment_instructions0",
  "memo": "memo6"
}
```

