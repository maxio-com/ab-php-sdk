
# Create Invoice Payment

## Structure

`CreateInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | string\|float\|null | Optional | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `?string` | Optional | A description to be attached to the payment. | getMemo(): ?string | setMemo(?string memo): void |
| `method` | [`?string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Optional | The type of payment method used.<br>**Default**: `InvoicePaymentMethodType::OTHER` | getMethod(): ?string | setMethod(?string method): void |
| `details` | `?string` | Optional | Additional information related to the payment method (eg. Check #) | getDetails(): ?string | setDetails(?string details): void |

## Example (as JSON)

```json
{
  "method": "other",
  "amount": "String9",
  "memo": "memo0",
  "details": "details6"
}
```

