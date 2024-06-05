
# Debit Note

## Structure

`DebitNote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix "db_" followed by alphanumeric characters. | getUid(): ?string | setUid(?string uid): void |
| `siteId` | `?int` | Optional | ID of the site to which the debit note belongs. | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | ID of the customer to which the debit note belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | ID of the subscription that generated the debit note. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?int` | Optional | A unique, identifier that appears on the debit note and in places it is referenced. | getNumber(): ?int | setNumber(?int number): void |
| `sequenceNumber` | `?int` | Optional | A monotonically increasing number assigned to debit notes as they are created. | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `originCreditNoteUid` | `?string` | Optional | Unique identifier for the connected credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters.<br><br>While the UID is long and not appropriate to show to customers, the number is usually shorter and consumable by the customer and the merchant alike. | getOriginCreditNoteUid(): ?string | setOriginCreditNoteUid(?string originCreditNoteUid): void |
| `originCreditNoteNumber` | `?string` | Optional | A unique, identifying string of the connected credit note. | getOriginCreditNoteNumber(): ?string | setOriginCreditNoteNumber(?string originCreditNoteNumber): void |
| `issueDate` | `?DateTime` | Optional | Date the document was issued to the customer. This is the date that the document was made available for payment.<br><br>The format is "YYYY-MM-DD". | getIssueDate(): ?\DateTime | setIssueDate(?\DateTime issueDate): void |
| `appliedDate` | `?DateTime` | Optional | Debit notes are applied to invoices to offset invoiced amounts - they adjust the amount due. This field is the date the debit note document became fully applied to the invoice.<br><br>The format is "YYYY-MM-DD". | getAppliedDate(): ?\DateTime | setAppliedDate(?\DateTime appliedDate): void |
| `dueDate` | `?DateTime` | Optional | Date the document is due for payment. The format is "YYYY-MM-DD". | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `status` | [`?string(DebitNoteStatus)`](../../doc/models/debit-note-status.md) | Optional | Current status of the debit note. | getStatus(): ?string | setStatus(?string status): void |
| `memo` | `?string` | Optional | The memo printed on debit note, which is a description of the reason for the debit. | getMemo(): ?string | setMemo(?string memo): void |
| `role` | [`?string(DebitNoteRole)`](../../doc/models/debit-note-role.md) | Optional | The role of the debit note. | getRole(): ?string | setRole(?string role): void |
| `currency` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of the credit note amount fields. | getCurrency(): ?string | setCurrency(?string currency): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the debit note. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the debited subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `billingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The billing address of the debited subscription. | getBillingAddress(): ?InvoiceAddress | setBillingAddress(?InvoiceAddress billingAddress): void |
| `shippingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The shipping address of the debited subscription. | getShippingAddress(): ?InvoiceAddress | setShippingAddress(?InvoiceAddress shippingAddress): void |
| `lineItems` | [`?(CreditNoteLineItem[])`](../../doc/models/credit-note-line-item.md) | Optional | Line items on the debit note. | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(InvoiceDiscount[])`](../../doc/models/invoice-discount.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(InvoiceTax[])`](../../doc/models/invoice-tax.md) | Optional | - | getTaxes(): ?array | setTaxes(?array taxes): void |
| `refunds` | [`?(InvoiceRefund[])`](../../doc/models/invoice-refund.md) | Optional | - | getRefunds(): ?array | setRefunds(?array refunds): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "site_id": 112,
  "customer_id": 224,
  "subscription_id": 40,
  "number": 172
}
```

