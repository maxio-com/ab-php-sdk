
# Create Invoice Payment

## Structure

`CreateInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | string\|float\|null | Optional | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `?string` | Optional | A description to be attached to the payment. | getMemo(): ?string | setMemo(?string memo): void |
| `method` | [`?string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Optional | The type of payment method used. Defaults to other. | getMethod(): ?string | setMethod(?string method): void |
| `details` | `?string` | Optional | Additional information related to the payment method (eg. Check #) | getDetails(): ?string | setDetails(?string details): void |
| `paymentProfileId` | `?int` | Optional | The ID of the payment profile to be used for the payment. | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |

## Example (as JSON)

```json
{
  "amount": "String9",
  "memo": "memo0",
  "method": "cash",
  "details": "details6",
  "payment_profile_id": 122
}
```

