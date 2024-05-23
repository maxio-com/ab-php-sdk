
# Apply Credit Note Event Data 1

Example schema for an `apply_credit_note` event

## Structure

`ApplyCreditNoteEventData1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | Unique identifier for the credit note application. It is generated automatically by Chargify and has the prefix "cdt_" followed by alphanumeric characters. | getUid(): string | setUid(string uid): void |
| `creditNoteNumber` | `string` | Required | A unique, identifying string that appears on the credit note and in places it is referenced. | getCreditNoteNumber(): string | setCreditNoteNumber(string creditNoteNumber): void |
| `creditNoteUid` | `string` | Required | Unique identifier for the credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters. | getCreditNoteUid(): string | setCreditNoteUid(string creditNoteUid): void |
| `originalAmount` | `string` | Required | The full, original amount of the credit note. | getOriginalAmount(): string | setOriginalAmount(string originalAmount): void |
| `appliedAmount` | `string` | Required | The amount of the credit note applied to invoice. | getAppliedAmount(): string | setAppliedAmount(string appliedAmount): void |
| `transactionTime` | `DateTime` | Required | The time the credit note was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): \DateTime | setTransactionTime(\DateTime transactionTime): void |
| `memo` | `?string` | Required | The credit note memo. | getMemo(): ?string | setMemo(?string memo): void |
| `role` | [`?string(InvoiceRole2)`](../../doc/models/invoice-role-2.md) | Optional | The role of the credit note (e.g. 'general') | getRole(): ?string | setRole(?string role): void |
| `consolidatedInvoice` | `?bool` | Optional | Shows whether it was applied to consolidated invoice or not | getConsolidatedInvoice(): ?bool | setConsolidatedInvoice(?bool consolidatedInvoice): void |
| `appliedCreditNotes` | [`?(AppliedCreditNoteData[])`](../../doc/models/applied-credit-note-data.md) | Optional | List of credit notes applied to children invoices (if consolidated invoice) | getAppliedCreditNotes(): ?array | setAppliedCreditNotes(?array appliedCreditNotes): void |
| `debitNoteNumber` | `string` | Required | A unique, identifying string that appears on the debit note and in places it is referenced. | getDebitNoteNumber(): string | setDebitNoteNumber(string debitNoteNumber): void |
| `debitNoteUid` | `string` | Required | Unique identifier for the debit note. It is generated automatically by Chargify and has the prefix "db_" followed by alphanumeric characters. | getDebitNoteUid(): string | setDebitNoteUid(string debitNoteUid): void |
| `consolidationLevel` | [`string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Required | Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one of the following values:<br><br>* "none": A normal invoice with no consolidation.<br>* "child": An invoice segment which has been combined into a consolidated invoice.<br>* "parent": A consolidated invoice, whose contents are composed of invoice segments.<br><br>"Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate the member invoice segments.<br><br>See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-us/articles/4407746391835). | getConsolidationLevel(): string | setConsolidationLevel(string consolidationLevel): void |
| `paymentMethod` | [PaymentMethodApplePay](../../doc/models/payment-method-apple-pay.md)\|[PaymentMethodBankAccount](../../doc/models/payment-method-bank-account.md)\|[PaymentMethodCreditCard](../../doc/models/payment-method-credit-card.md)\|[PaymentMethodExternal](../../doc/models/payment-method-external.md)\|[PaymentMethodPaypal](../../doc/models/payment-method-paypal.md) | Required | This is a container for any-of cases. | getPaymentMethod(): | setPaymentMethod( paymentMethod): void |
| `transactionId` | `int` | Required | The Chargify id of the original payment | getTransactionId(): int | setTransactionId(int transactionId): void |
| `parentInvoiceNumber` | `?int` | Optional | For invoices with `consolidation_level` of `child`, this specifies the number of the parent (consolidated) invoice. | getParentInvoiceNumber(): ?int | setParentInvoiceNumber(?int parentInvoiceNumber): void |
| `remainingPrepaymentAmount` | `?string` | Optional | - | getRemainingPrepaymentAmount(): ?string | setRemainingPrepaymentAmount(?string remainingPrepaymentAmount): void |
| `prepayment` | `bool` | Required | The flag that shows whether the original payment was a prepayment or not | getPrepayment(): bool | setPrepayment(bool prepayment): void |
| `external` | `?bool` | Optional | - | getExternal(): ?bool | setExternal(?bool external): void |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `siteId` | `?int` | Optional | ID of the site to which the invoice belongs. | getSiteId(): ?int | setSiteId(?int siteId): void |
| `customerId` | `?int` | Optional | ID of the customer to which the invoice belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `subscriptionId` | `?int` | Optional | ID of the subscription that generated the invoice. | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `number` | `?string` | Optional | A unique, identifying string that appears on the invoice and in places the invoice is referenced.<br><br>While the UID is long and not appropriate to show to customers, the number is usually shorter and consumable by the customer and the merchant alike. | getNumber(): ?string | setNumber(?string number): void |
| `sequenceNumber` | `?int` | Optional | A monotonically increasing number assigned to invoices as they are created.  This number is unique within a site and can be used to sort and order invoices. | getSequenceNumber(): ?int | setSequenceNumber(?int sequenceNumber): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `issueDate` | `?DateTime` | Optional | Date the invoice was issued to the customer.  This is the date that the invoice was made available for payment.<br><br>The format is `"YYYY-MM-DD"`. | getIssueDate(): ?\DateTime | setIssueDate(?\DateTime issueDate): void |
| `dueDate` | `?DateTime` | Optional | Date the invoice is due.<br><br>The format is `"YYYY-MM-DD"`. | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `paidDate` | `?DateTime` | Optional | Date the invoice became fully paid.<br><br>If partial payments are applied to the invoice, this date will not be present until payment has been made in full.<br><br>The format is `"YYYY-MM-DD"`. | getPaidDate(): ?\DateTime | setPaidDate(?\DateTime paidDate): void |
| `status` | [`?string(InvoiceStatus)`](../../doc/models/invoice-status.md) | Optional | The current status of the invoice. See [Invoice Statuses](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for more. | getStatus(): ?string | setStatus(?string status): void |
| `parentInvoiceId` | `?int` | Optional | - | getParentInvoiceId(): ?int | setParentInvoiceId(?int parentInvoiceId): void |
| `collectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`. | getCollectionMethod(): ?string | setCollectionMethod(?string collectionMethod): void |
| `paymentInstructions` | `?string` | Optional | A message that is printed on the invoice when it is marked for remittance collection. It is intended to describe to the customer how they may make payment, and is configured by the merchant. | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `currency` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of invoice transaction. | getCurrency(): ?string | setCurrency(?string currency): void |
| `parentInvoiceUid` | `?string` | Optional | For invoices with `consolidation_level` of `child`, this specifies the UID of the parent (consolidated) invoice. | getParentInvoiceUid(): ?string | setParentInvoiceUid(?string parentInvoiceUid): void |
| `subscriptionGroupId` | `?int` | Optional | - | getSubscriptionGroupId(): ?int | setSubscriptionGroupId(?int subscriptionGroupId): void |
| `groupPrimarySubscriptionId` | `?int` | Optional | For invoices with `consolidation_level` of `parent`, this specifies the ID of the subscription which was the primary subscription of the subscription group that generated the invoice. | getGroupPrimarySubscriptionId(): ?int | setGroupPrimarySubscriptionId(?int groupPrimarySubscriptionId): void |
| `productName` | `?string` | Optional | The name of the product subscribed when the invoice was generated. | getProductName(): ?string | setProductName(?string productName): void |
| `productFamilyName` | `?string` | Optional | The name of the product family subscribed when the invoice was generated. | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `seller` | [`?InvoiceSeller`](../../doc/models/invoice-seller.md) | Optional | Information about the seller (merchant) listed on the masthead of the invoice. | getSeller(): ?InvoiceSeller | setSeller(?InvoiceSeller seller): void |
| `customer` | [`?InvoiceCustomer`](../../doc/models/invoice-customer.md) | Optional | Information about the customer who is owner or recipient the invoiced subscription. | getCustomer(): ?InvoiceCustomer | setCustomer(?InvoiceCustomer customer): void |
| `payer` | [`?InvoicePayer`](../../doc/models/invoice-payer.md) | Optional | - | getPayer(): ?InvoicePayer | setPayer(?InvoicePayer payer): void |
| `recipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `netTerms` | `?int` | Optional | - | getNetTerms(): ?int | setNetTerms(?int netTerms): void |
| `billingAddress` | [`?BillingAddress`](../../doc/models/billing-address.md) | Optional | - | getBillingAddress(): ?BillingAddress | setBillingAddress(?BillingAddress billingAddress): void |
| `shippingAddress` | [`?ShippingAddress`](../../doc/models/shipping-address.md) | Optional | - | getShippingAddress(): ?ShippingAddress | setShippingAddress(?ShippingAddress shippingAddress): void |
| `subtotalAmount` | `?string` | Optional | Subtotal of the invoice, which is the sum of all line items before discounts or taxes. | getSubtotalAmount(): ?string | setSubtotalAmount(?string subtotalAmount): void |
| `discountAmount` | `?string` | Optional | Total discount applied to the invoice. | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |
| `taxAmount` | `?string` | Optional | Total tax on the invoice. | getTaxAmount(): ?string | setTaxAmount(?string taxAmount): void |
| `totalAmount` | `string` | Required | The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.' | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `creditAmount` | `?string` | Optional | The amount of credit (from credit notes) applied to this invoice.<br><br>Credits offset the amount due from the customer. | getCreditAmount(): ?string | setCreditAmount(?string creditAmount): void |
| `refundAmount` | `string` | Required | The amount of the refund. | getRefundAmount(): string | setRefundAmount(string refundAmount): void |
| `paidAmount` | `?string` | Optional | The amount paid on the invoice by the customer. | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |
| `dueAmount` | `string` | Required | Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`. | getDueAmount(): string | setDueAmount(string dueAmount): void |
| `lineItems` | [`?(InvoiceLineItem2[])`](../../doc/models/invoice-line-item-2.md) | Optional | Line items on the invoice. | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `discounts` | [`?(InvoiceDiscount[])`](../../doc/models/invoice-discount.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `taxes` | [`?(InvoiceTax[])`](../../doc/models/invoice-tax.md) | Optional | - | getTaxes(): ?array | setTaxes(?array taxes): void |
| `credits` | [`?(InvoiceCredit[])`](../../doc/models/invoice-credit.md) | Optional | - | getCredits(): ?array | setCredits(?array credits): void |
| `refunds` | [`?(InvoiceRefund[])`](../../doc/models/invoice-refund.md) | Optional | - | getRefunds(): ?array | setRefunds(?array refunds): void |
| `payments` | [`?(InvoicePayment[])`](../../doc/models/invoice-payment.md) | Optional | - | getPayments(): ?array | setPayments(?array payments): void |
| `customFields` | [`?(InvoiceCustomField[])`](../../doc/models/invoice-custom-field.md) | Optional | - | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `displaySettings` | [`?InvoiceDisplaySettings`](../../doc/models/invoice-display-settings.md) | Optional | - | getDisplaySettings(): ?InvoiceDisplaySettings | setDisplaySettings(?InvoiceDisplaySettings displaySettings): void |
| `publicUrl` | `?string` | Optional | The public URL of the invoice | getPublicUrl(): ?string | setPublicUrl(?string publicUrl): void |
| `previousBalanceData` | [`?InvoicePreviousBalance`](../../doc/models/invoice-previous-balance.md) | Optional | - | getPreviousBalanceData(): ?InvoicePreviousBalance | setPreviousBalanceData(?InvoicePreviousBalance previousBalanceData): void |
| `chargebackStatus` | [`string(ChargebackStatus)`](../../doc/models/chargeback-status.md) | Required | - | getChargebackStatus(): string | setChargebackStatus(string chargebackStatus): void |
| `fromCollectionMethod` | `string` | Required | The previous collection method of the invoice. | getFromCollectionMethod(): string | setFromCollectionMethod(string fromCollectionMethod): void |
| `toCollectionMethod` | `string` | Required | The new collection method of the invoice. | getToCollectionMethod(): string | setToCollectionMethod(string toCollectionMethod): void |
| `gatewayTransId` | `?string` | Optional | Identifier for the transaction within the payment gateway. | getGatewayTransId(): ?string | setGatewayTransId(?string gatewayTransId): void |
| `amount` | `?string` | Optional | The monetary value associated with the linked payment, expressed in dollars. | getAmount(): ?string | setAmount(?string amount): void |
| `fromStatus` | `array` | Required | - | getFromStatus(): array | setFromStatus(array fromStatus): void |
| `toStatus` | `array` | Required | - | getToStatus(): array | setToStatus(array toStatus): void |
| `appliedDate` | `?DateTime` | Optional | Credit notes are applied to invoices to offset invoiced amounts - they reduce the amount due. This field is the date the credit note became fully applied to invoices.<br><br>If the credit note has been partially applied, this field will not have a value until it has been fully applied.<br><br>The format is `"YYYY-MM-DD"`. | getAppliedDate(): ?\DateTime | setAppliedDate(?\DateTime appliedDate): void |
| `remainingAmount` | `?string` | Optional | The amount of the credit note remaining to be applied to invoices, which is `total_amount - applied_amount`. | getRemainingAmount(): ?string | setRemainingAmount(?string remainingAmount): void |
| `applications` | [`?(CreditNoteApplication[])`](../../doc/models/credit-note-application.md) | Optional | - | getApplications(): ?array | setApplications(?array applications): void |
| `originInvoices` | [`?(OriginInvoice[])`](../../doc/models/origin-invoice.md) | Optional | An array of origin invoices for the credit note. Learn more about [Origin Invoice from our docs](https://chargify.zendesk.com/hc/en-us/articles/4407753036699#origin-invoices) | getOriginInvoices(): ?array | setOriginInvoices(?array originInvoices): void |
| `originCreditNoteUid` | `?string` | Optional | Unique identifier for the connected credit note. It is generated automatically by Chargify and has the prefix "cn_" followed by alphanumeric characters.<br><br>While the UID is long and not appropriate to show to customers, the number is usually shorter and consumable by the customer and the merchant alike. | getOriginCreditNoteUid(): ?string | setOriginCreditNoteUid(?string originCreditNoteUid): void |
| `originCreditNoteNumber` | `?string` | Optional | A unique, identifying string of the connected credit note. | getOriginCreditNoteNumber(): ?string | setOriginCreditNoteNumber(?string originCreditNoteNumber): void |
| `amountInCents` | `int` | Required | The monetary value of the payment, expressed in cents. | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `applyCredit` | `bool` | Required | If true, credit was created and applied it to the invoice. | getApplyCredit(): bool | setApplyCredit(bool applyCredit): void |
| `creditNoteAttributes` | [`CreditNote1`](../../doc/models/credit-note-1.md) | Required | - | getCreditNoteAttributes(): CreditNote1 | setCreditNoteAttributes(CreditNote1 creditNoteAttributes): void |
| `paymentId` | `int` | Required | The ID of the payment transaction to be refunded. | getPaymentId(): int | setPaymentId(int paymentId): void |
| `refundId` | `int` | Required | The ID of the refund transaction. | getRefundId(): int | setRefundId(int refundId): void |
| `isAdvanceInvoice` | `bool` | Required | If true, the invoice is an advance invoice. | getIsAdvanceInvoice(): bool | setIsAdvanceInvoice(bool isAdvanceInvoice): void |
| `reason` | `string` | Required | The reason for the void. | getReason(): string | setReason(string reason): void |

## Example (as JSON)

```json
{
  "uid": "uid6",
  "credit_note_number": "credit_note_number0",
  "credit_note_uid": "credit_note_uid0",
  "original_amount": "original_amount0",
  "applied_amount": "applied_amount2",
  "transaction_time": "2016-03-13T12:52:32.123Z",
  "memo": "memo0",
  "debit_note_number": "debit_note_number6",
  "debit_note_uid": "debit_note_uid2",
  "consolidation_level": "child",
  "payment_method": {
    "type": "apple_pay"
  },
  "transaction_id": 138,
  "prepayment": false,
  "issue_date": "2024-01-01",
  "due_date": "2024-01-01",
  "paid_date": "2024-01-01",
  "total_amount": "total_amount2",
  "refund_amount": "refund_amount2",
  "due_amount": "due_amount8",
  "chargeback_status": "won",
  "from_collection_method": "from_collection_method4",
  "to_collection_method": "to_collection_method8",
  "from_status": {
    "key1": "val1",
    "key2": "val2"
  },
  "to_status": {
    "key1": "val1",
    "key2": "val2"
  },
  "amount_in_cents": 96,
  "apply_credit": false,
  "credit_note_attributes": {
    "uid": "uid2",
    "site_id": 72,
    "customer_id": 184,
    "subscription_id": 0,
    "number": "number0"
  },
  "payment_id": 8,
  "refund_id": 52,
  "is_advance_invoice": false,
  "reason": "reason2",
  "role": "unset",
  "consolidated_invoice": false,
  "applied_credit_notes": [
    {
      "uid": "uid4",
      "number": "number8"
    },
    {
      "uid": "uid4",
      "number": "number8"
    }
  ],
  "parent_invoice_number": 232,
  "remaining_prepayment_amount": "remaining_prepayment_amount6"
}
```

