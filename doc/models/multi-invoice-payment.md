
# Multi Invoice Payment

## Structure

`MultiInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?int` | Optional | The numeric ID of the transaction. | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `totalAmount` | `?string` | Optional | Dollar amount of the sum of the paid invoices. | getTotalAmount(): ?string | setTotalAmount(?string totalAmount): void |
| `currencyCode` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of invoice transaction. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `applications` | [`?(InvoicePaymentApplication[])`](../../doc/models/invoice-payment-application.md) | Optional | - | getApplications(): ?array | setApplications(?array applications): void |

## Example (as JSON)

```json
{
  "transaction_id": 144,
  "total_amount": "total_amount2",
  "currency_code": "currency_code2",
  "applications": [
    {
      "invoice_uid": "invoice_uid8",
      "application_uid": "application_uid8",
      "applied_amount": "applied_amount0"
    }
  ]
}
```

