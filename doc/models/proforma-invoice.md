
# Proforma Invoice

## Structure

`ProformaInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?int` | Optional | - | getNumber(): ?int | setNumber(?int number): void |
| `sequenceNumber` | `?int` | Optional | - | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `deliveryDate` | `?DateTime` | Optional | - | getDeliveryDate(): ?\DateTime | setDeliveryDate(?\DateTime deliveryDate): void |
| `status` | [`?string(ProformaInvoiceStatus)`](../../doc/models/proforma-invoice-status.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `collectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`. | getCollectionMethod(): ?string | setCollectionMethod(?string collectionMethod): void |
| `paymentInstructions` | `?string` | Optional | - | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `consolidationLevel` | [`?string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Optional | Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one of the following values:<br><br>* "none": A normal invoice with no consolidation.<br>* "child": An invoice segment which has been combined into a consolidated invoice.<br>* "parent": A consolidated invoice, whose contents are composed of invoice segments.<br><br>"Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate the member invoice segments.<br><br>See also the [invoice consolidation documentation](https://maxio.zendesk.com/hc/en-us/articles/24252269909389-Invoice-Consolidation). | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |
| `productName` | `?string` | Optional | - | getProductName(): ?string | setProductName(?string productName): void |
| `productFamilyName` | `?string` | Optional | - | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `role` | [`?string(ProformaInvoiceRole)`](../../doc/models/proforma-invoice-role.md) | Optional | 'proforma' value is deprecated in favor of proforma_adhoc and proforma_automatic | getRole(): ?string | setRole(?string role): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the invoice. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the invoiced subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `billingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getBillingAddress(): ?InvoiceAddress | setBillingAddress(?InvoiceAddress billingAddress): void |
| `shippingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getShippingAddress(): ?InvoiceAddress | setShippingAddress(?InvoiceAddress shippingAddress): void |
| `subtotalAmount` | `?string` | Optional | - | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | - | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | - | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `?string` | Optional | - | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `creditAmount` | `?string` | Optional | - | getCreditAmount(): ?string | setCreditAmount(?string creditAmount): void |
| `paidAmount` | `?string` | Optional | - | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `refundAmount` | `?string` | Optional | - | getRefundAmount(): ?string | setRefundAmount(?string refundAmount): void |
| `dueAmount` | `?string` | Optional | - | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `lineItems` | [`?(InvoiceLineItem[])`](../../doc/models/invoice-line-item.md) | Optional | - | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(ProformaInvoiceDiscount[])`](../../doc/models/proforma-invoice-discount.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(ProformaInvoiceTax[])`](../../doc/models/proforma-invoice-tax.md) | Optional | - | getTaxes(): ?array | setTaxes(?array taxes): void |
| `credits` | [`?(ProformaInvoiceCredit[])`](../../doc/models/proforma-invoice-credit.md) | Optional | - | getCredits(): ?array | setCredits(?array credits): void |
| `payments` | [`?(ProformaInvoicePayment[])`](../../doc/models/proforma-invoice-payment.md) | Optional | - | getPayments(): ?array | setPayments(?array payments): void |
| `customFields` | [`?(InvoiceCustomField[])`](../../doc/models/invoice-custom-field.md) | Optional | - | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `publicUrl` | `?string` | Optional | - | getPublicUrl(): ?string | setPublicUrl(?string publicUrl): void |

## Example (as JSON)

```json
{
  "uid": "uid6",
  "site_id": 196,
  "customer_id": 52,
  "subscription_id": 124,
  "number": 0
}
```

