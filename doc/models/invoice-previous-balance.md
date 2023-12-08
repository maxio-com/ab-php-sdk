
# Invoice Previous Balance

## Structure

`InvoicePreviousBalance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `captureDate` | `?string` | Optional | - | getCaptureDate(): ?string | setCaptureDate(?string captureDate): void |
| `invoices` | [`?(InvoiceBalanceItem[])`](../../doc/models/invoice-balance-item.md) | Optional | - | getInvoices(): ?array | setInvoices(?array invoices): void |

## Example (as JSON)

```json
{
  "capture_date": "capture_date2",
  "invoices": [
    {
      "uid": "uid6",
      "number": "number6",
      "outstanding_amount": "outstanding_amount8"
    }
  ]
}
```

