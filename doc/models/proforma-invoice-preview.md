
# Proforma Invoice Preview

## Structure

`ProformaInvoicePreview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getUid(): ?string | setUid(?string uid): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `sequenceNumber` | `?int` | Optional | - | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `createdAt` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `deliveryDate` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDeliveryDate(): ?string | setDeliveryDate(?string deliveryDate): void |
| `status` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getStatus(): ?string | setStatus(?string status): void |
| `collectionMethod` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getCollectionMethod(): ?string | setCollectionMethod(?string collectionMethod): void |
| `paymentInstructions` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `currency` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getCurrency(): ?string | setCurrency(?string currency): void |
| `consolidationLevel` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |
| `productName` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getProductName(): ?string | setProductName(?string productName): void |
| `productFamilyName` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `role` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getRole(): ?string | setRole(?string role): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the invoice. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the invoiced subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `memo` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getMemo(): ?string | setMemo(?string memo): void |
| `billingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getBillingAddress(): ?InvoiceAddress | setBillingAddress(?InvoiceAddress billingAddress): void |
| `shippingAddress` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getShippingAddress(): ?InvoiceAddress | setShippingAddress(?InvoiceAddress shippingAddress): void |
| `subtotalAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `creditAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getCreditAmount(): ?string | setCreditAmount(?string creditAmount): void |
| `paidAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `refundAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getRefundAmount(): ?string | setRefundAmount(?string refundAmount): void |
| `dueAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `lineItems` | [`?(InvoiceLineItem[])`](../../doc/models/invoice-line-item.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(ProformaInvoiceDiscount[])`](../../doc/models/proforma-invoice-discount.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(ProformaInvoiceTax[])`](../../doc/models/proforma-invoice-tax.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getTaxes(): ?array | setTaxes(?array taxes): void |
| `credits` | [`?(ProformaInvoiceCredit[])`](../../doc/models/proforma-invoice-credit.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getCredits(): ?array | setCredits(?array credits): void |
| `payments` | [`?(ProformaInvoicePayment[])`](../../doc/models/proforma-invoice-payment.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getPayments(): ?array | setPayments(?array payments): void |
| `customFields` | [`?(ProformaCustomField[])`](../../doc/models/proforma-custom-field.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `publicUrl` | `?string` | Optional | - | getPublicUrl(): ?string | setPublicUrl(?string publicUrl): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "site_id": 214,
  "customer_id": 70,
  "subscription_id": 142,
  "number": "number0"
}
```

