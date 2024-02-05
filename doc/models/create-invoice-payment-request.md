
# Create Invoice Payment Request

## Structure

`CreateInvoicePaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payment` | [`CreateInvoicePayment`](../../doc/models/create-invoice-payment.md) | Required | - | getPayment(): CreateInvoicePayment | setPayment(CreateInvoicePayment payment): void |
| `type` | [`?string(InvoicePaymentType)`](../../doc/models/invoice-payment-type.md) | Optional | The type of payment to be applied to an Invoice. Defaults to external. | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "payment": {
    "amount": "String9",
    "memo": "memo0",
    "method": "ach",
    "details": "details6"
  },
  "type": "external"
}
```

