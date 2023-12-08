
# Create Invoice Payment Application

## Structure

`CreateInvoicePaymentApplication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceUid` | `string` | Required | Unique identifier for the invoice. It has the prefix "inv_" followed by alphanumeric characters. | getInvoiceUid(): string | setInvoiceUid(string invoiceUid): void |
| `amount` | `string` | Required | Dollar amount of the invoice payment (eg. "10.50" => $10.50). | getAmount(): string | setAmount(string amount): void |

## Example (as JSON)

```json
{
  "invoice_uid": "invoice_uid4",
  "amount": "amount6"
}
```

