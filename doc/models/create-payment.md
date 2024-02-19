
# Create Payment

## Structure

`CreatePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `memo` | `string` | Required | - | getMemo(): string | setMemo(string memo): void |
| `paymentDetails` | `string` | Required | - | getPaymentDetails(): string | setPaymentDetails(string paymentDetails): void |
| `paymentMethod` | [`string(InvoicePaymentMethodType)`](../../doc/models/invoice-payment-method-type.md) | Required | The type of payment method used. Defaults to other. | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |

## Example (as JSON)

```json
{
  "amount": "amount6",
  "memo": "memo8",
  "payment_details": "payment_details4",
  "payment_method": "cash"
}
```

