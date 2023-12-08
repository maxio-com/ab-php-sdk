
# Create Multi Invoice Payment

## Structure

`CreateMultiInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memo` | `?string` | Optional | A description to be attached to the payment. | getMemo(): ?string | setMemo(?string memo): void |
| `details` | `?string` | Optional | Additional information related to the payment method (eg. Check #). | getDetails(): ?string | setDetails(?string details): void |
| `method` | [`?string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Optional | The type of payment method used.<br>**Default**: `InvoicePaymentMethodType::OTHER` | getMethod(): ?string | setMethod(?string method): void |
| `amount` | string\|float | Required | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `receivedOn` | `?string` | Optional | Date reflecting when the payment was received from a customer. Must be in the past. | getReceivedOn(): ?string | setReceivedOn(?string receivedOn): void |
| `applications` | [`CreateInvoicePaymentApplication[]`](../../doc/models/create-invoice-payment-application.md) | Required | - | getApplications(): array | setApplications(array applications): void |

## Example (as JSON)

```json
{
  "method": "other",
  "amount": "String7",
  "applications": [
    {
      "invoice_uid": "invoice_uid8",
      "amount": "amount0"
    }
  ],
  "memo": "memo8",
  "details": "details4",
  "received_on": "received_on6"
}
```

