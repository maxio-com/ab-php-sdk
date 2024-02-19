
# Record Payment Response

## Structure

`RecordPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paidInvoices` | [`?(PaidInvoice[])`](../../doc/models/paid-invoice.md) | Optional | - | getPaidInvoices(): ?array | setPaidInvoices(?array paidInvoices): void |
| `prepayment` | [InvoicePrePayment](../../doc/models/invoice-pre-payment.md)\|null | Optional | This is a container for one-of cases. | getPrepayment(): ?InvoicePrePayment | setPrepayment(?InvoicePrePayment prepayment): void |

## Example (as JSON)

```json
{
  "paid_invoices": [
    {
      "invoice_id": "invoice_id8",
      "status": "draft",
      "due_amount": "due_amount0",
      "paid_amount": "paid_amount0"
    },
    {
      "invoice_id": "invoice_id8",
      "status": "draft",
      "due_amount": "due_amount0",
      "paid_amount": "paid_amount0"
    },
    {
      "invoice_id": "invoice_id8",
      "status": "draft",
      "due_amount": "due_amount0",
      "paid_amount": "paid_amount0"
    }
  ],
  "prepayment": {
    "subscription_id": 180,
    "amount_in_cents": 100,
    "ending_balance_in_cents": 60
  }
}
```

