
# Invoice

## Structure

`Invoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `uid` | `?string` | Optional | Unique identifier for the invoice. It is generated automatically by Chargify and has the prefix "inv_" followed by alphanumeric characters. | getUid(): ?string | setUid(?string uid): void |
| `siteId` | `?int` | Optional | ID of the site to which the invoice belongs. | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | ID of the customer to which the invoice belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | ID of the subscription that generated the invoice. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?string` | Optional | A unique, identifying string that appears on the invoice and in places the invoice is referenced.<br><br>While the UID is long and not appropriate to show to customers, the number is usually shorter and consumable by the customer and the merchant alike. | getNumber(): ?string | setNumber(?string number): void |
| `sequenceNumber` | `?int` | Optional | A monotonically increasing number assigned to invoices as they are created.  This number is unique within a site and can be used to sort and order invoices. | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `transactionTime` | `?DateTime` | Optional | - | getTransactionTime(): ?\DateTime | setTransactionTime(?\DateTime transactionTime): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `issueDate` | `?string` | Optional | Date the invoice was issued to the customer.  This is the date that the invoice was made available for payment.<br><br>The format is `"YYYY-MM-DD"`. | getIssueDate(): ?string | setIssueDate(?string issueDate): void |
| `dueDate` | `?string` | Optional | Date the invoice is due.<br><br>The format is `"YYYY-MM-DD"`. | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `paidDate` | `?string` | Optional | Date the invoice became fully paid.<br><br>If partial payments are applied to the invoice, this date will not be present until payment has been made in full.<br><br>The format is `"YYYY-MM-DD"`. | getPaidDate(): ?string | setPaidDate(?string paidDate): void |
| `status` | [`?string(Status)`](../../doc/models/status.md) | Optional | The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more. | getStatus(): ?string | setStatus(?string status): void |
| `role` | `?string` | Optional | - | getRole(): ?string | setRole(?string role): void |
| `parentInvoiceId` | `?int` | Optional | - | getParentInvoiceId(): ?int | setParentInvoiceId(?int parentInvoiceId): void |
| `collectionMethod` | `?string` | Optional | The collection method of the invoice, which is either "automatic" (tried and retried on an existing payment method by Chargify) or "remittance" (payment must be remitted by the customer or keyed in by the merchant). | getCollectionMethod(): ?string | setCollectionMethod(?string collectionMethod): void |
| `paymentInstructions` | `?string` | Optional | A message that is printed on the invoice when it is marked for remittance collection. It is intended to describe to the customer how they may make payment, and is configured by the merchant. | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `currency` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of invoice transaction. | getCurrency(): ?string | setCurrency(?string currency): void |
| `consolidationLevel` | [`?string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Optional | Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one of the following values:<br><br>* "none": A normal invoice with no consolidation.<br>* "child": An invoice segment which has been combined into a consolidated invoice.<br>* "parent": A consolidated invoice, whose contents are composed of invoice segments.<br><br>"Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate the member invoice segments.<br><br>See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-us/articles/4407746391835). | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |
| `parentInvoiceUid` | `?string` | Optional | For invoices with `consolidation_level` of `child`, this specifies the UID of the parent (consolidated) invoice. | getParentInvoiceUid(): ?string | setParentInvoiceUid(?string parentInvoiceUid): void |
| `subscriptionGroupId` | `?int` | Optional | - | getSubscriptionGroupId(): ?int | setSubscriptionGroupId(?int subscriptionGroupId): void |
| `parentInvoiceNumber` | `?int` | Optional | For invoices with `consolidation_level` of `child`, this specifies the number of the parent (consolidated) invoice. | getParentInvoiceNumber(): ?int | setParentInvoiceNumber(?int parentInvoiceNumber): void |
| `groupPrimarySubscriptionId` | `?int` | Optional | For invoices with `consolidation_level` of `parent`, this specifies the ID of the subscription which was the primary subscription of the subscription group that generated the invoice. | getGroupPrimarySubscriptionId(): ?int | setGroupPrimarySubscriptionId(?int groupPrimarySubscriptionId): void |
| `productName` | `?string` | Optional | The name of the product subscribed when the invoice was generated. | getProductName(): ?string | setProductName(?string productName): void |
| `productFamilyName` | `?string` | Optional | The name of the product family subscribed when the invoice was generated. | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the invoice. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the invoiced subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `payer` | [`?InvoicePayer`](../../doc/models/invoice-payer.md) | Optional | - | getPayer(): ?InvoicePayer | setPayer(?InvoicePayer payer): void |
| `recipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `netTerms` | `?int` | Optional | - | getNetTerms(): ?int | setNetTerms(?int netTerms): void |
| `memo` | `?string` | Optional | The memo printed on invoices of any collection type.  This message is in control of the merchant. | getMemo(): ?string | setMemo(?string memo): void |
| `billingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The invoice billing address. | getBillingAddress(): ?InvoiceAddress | setBillingAddress(?InvoiceAddress billingAddress): void |
| `shippingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | The invoice shipping address. | getShippingAddress(): ?InvoiceAddress | setShippingAddress(?InvoiceAddress shippingAddress): void |
| `subtotalAmount` | `?string` | Optional | Subtotal of the invoice, which is the sum of all line items before discounts or taxes. | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | Total discount applied to the invoice. | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | Total tax on the invoice. | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `?string` | Optional | The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.' | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `creditAmount` | `?string` | Optional | The amount of credit (from credit notes) applied to this invoice.<br><br>Credits offset the amount due from the customer. | getCreditAmount(): ?string | setCreditAmount(?string creditAmount): void |
| `refundAmount` | `?string` | Optional | - | getRefundAmount(): ?string | setRefundAmount(?string refundAmount): void |
| `paidAmount` | `?string` | Optional | The amount paid on the invoice by the customer. | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `dueAmount` | `?string` | Optional | Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`. | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `lineItems` | [`?(InvoiceLineItem[])`](../../doc/models/invoice-line-item.md) | Optional | Line items on the invoice. | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(InvoiceDiscount[])`](../../doc/models/invoice-discount.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(InvoiceTax[])`](../../doc/models/invoice-tax.md) | Optional | - | getTaxes(): ?array | setTaxes(?array taxes): void |
| `credits` | [`?(InvoiceCredit[])`](../../doc/models/invoice-credit.md) | Optional | - | getCredits(): ?array | setCredits(?array credits): void |
| `refunds` | [`?(InvoiceRefund[])`](../../doc/models/invoice-refund.md) | Optional | - | getRefunds(): ?array | setRefunds(?array refunds): void |
| `payments` | [`?(InvoicePayment[])`](../../doc/models/invoice-payment.md) | Optional | - | getPayments(): ?array | setPayments(?array payments): void |
| `customFields` | [`?(InvoiceCustomField[])`](../../doc/models/invoice-custom-field.md) | Optional | - | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `displaySettings` | [`?InvoiceDisplaySettings`](../../doc/models/invoice-display-settings.md) | Optional | - | getDisplaySettings(): ?InvoiceDisplaySettings | setDisplaySettings(?InvoiceDisplaySettings displaySettings): void |
| `publicUrl` | `?string` | Optional | The public URL of the invoice | getPublicUrl(): ?string | setPublicUrl(?string publicUrl): void |
| `previousBalanceData` | [`?InvoicePreviousBalance`](../../doc/models/invoice-previous-balance.md) | Optional | - | getPreviousBalanceData(): ?InvoicePreviousBalance | setPreviousBalanceData(?InvoicePreviousBalance previousBalanceData): void |

## Example (as JSON)

```json
{
  "id": 252,
  "uid": "uid0",
  "site_id": 178,
  "customer_id": 34,
  "subscription_id": 106
}
```

