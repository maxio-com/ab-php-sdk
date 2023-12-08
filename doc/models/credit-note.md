
# Credit Note

## Structure

`CreditNote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters. | getUid(): ?string | setUid(?string uid): void |
| `siteId` | `?int` | Optional | ID of the site to which the credit note belongs. | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | ID of the customer to which the credit note belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | ID of the subscription that generated the credit note. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?string` | Optional | A unique, identifying string that appears on the credit note and in places it is referenced.<br><br>While the UID is long and not appropriate to show to customers, the number is usually shorter and consumable by the customer and the merchant alike. | getNumber(): ?string | setNumber(?string number): void |
| `sequenceNumber` | `?int` | Optional | A monotonically increasing number assigned to credit notes as they are created.  This number is unique within a site and can be used to sort and order credit notes. | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `issueDate` | `?string` | Optional | Date the credit note was issued to the customer.  This is the date that the credit was made available for application, and may come before it is fully applied.<br><br>The format is `"YYYY-MM-DD"`. | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `appliedDate` | `?string` | Optional | Credit notes are applied to invoices to offset invoiced amounts - they reduce the amount due. This field is the date the credit note became fully applied to invoices.<br><br>If the credit note has been partially applied, this field will not have a value until it has been fully applied.<br><br>The format is `"YYYY-MM-DD"`. | getAppliedDate(): ?string | setAppliedDate(?string appliedDate): void |
| `status` | `?string` | Optional | Current status of the credit note. Valid values:<br><br>* open<br>* applied | getStatus(): ?string | setStatus(?string status): void |
| `currency` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of the credit note amount fields. | getCurrency(): ?string | setCurrency(?string currency): void |
| `memo` | `?string` | Optional | The memo printed on credit note, which is a description of the reason for the credit. | getMemo(): ?string | setMemo(?string memo): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the credit note. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the credited subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `billingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The billing address of the credit subscription. | getBillingAddress(): ?InvoiceAddress | setBillingAddress(?InvoiceAddress billingAddress): void |
| `shippingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The shipping address of the credited subscription. | getShippingAddress(): ?InvoiceAddress | setShippingAddress(?InvoiceAddress shippingAddress): void |
| `subtotalAmount` | `?string` | Optional | Subtotal of the credit note, which is the sum of all line items before discounts or taxes. Note that this is a positive amount representing the credit back to the customer. | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | Total discount applied to the credit note. Note that this is a positive amount representing the discount amount being credited back to the customer (i.e. a credit on an earlier discount). For example, if the original purchase was $1.00 and the original discount was $0.10, a credit of $0.50 of the original purchase (half) would have a discount credit of $0.05 (also half). | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | Total tax of the credit note. Note that this is a positive amount representing a previously taxex amount being credited back to the customer (i.e. a credit of an earlier tax). For example, if the original purchase was $1.00 and the original tax was $0.10, a credit of $0.50 of the original purchase (half) would also have a tax credit of $0.05 (also half). | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `?string` | Optional | The credit note total, which is `subtotal_amount - discount_amount + tax_amount`.' | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `appliedAmount` | `?string` | Optional | The amount of the credit note that has already been applied to invoices. | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `remainingAmount` | `?string` | Optional | The amount of the credit note remaining to be applied to invoices, which is `total_amount - applied_amount`. | getRemainingAmount(): ?string | setRemainingAmount(?string remainingAmount): void |
| `lineItems` | [`?(CreditNoteLineItem[])`](../../doc/models/credit-note-line-item.md) | Optional | Line items on the credit note. | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(InvoiceDiscount[])`](../../doc/models/invoice-discount.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(InvoiceTax[])`](../../doc/models/invoice-tax.md) | Optional | - | getTaxes(): ?array | setTaxes(?array taxes): void |
| `applications` | [`?(CreditNoteApplication[])`](../../doc/models/credit-note-application.md) | Optional | - | getApplications(): ?array | setApplications(?array applications): void |
| `refunds` | [`?(InvoiceRefund[])`](../../doc/models/invoice-refund.md) | Optional | - | getRefunds(): ?array | setRefunds(?array refunds): void |
| `originInvoices` | [`?(OriginInvoice[])`](../../doc/models/origin-invoice.md) | Optional | An array of origin invoices for the credit note. Learn more about [Origin Invoice from our docs](https://chargify.zendesk.com/hc/en-us/articles/4407753036699#origin-invoices) | getOriginInvoices(): ?array | setOriginInvoices(?array originInvoices): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "site_id": 218,
  "customer_id": 74,
  "subscription_id": 146,
  "number": "number0"
}
```

