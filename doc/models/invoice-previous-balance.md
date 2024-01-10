
# Invoice Previous Balance

## Structure

`InvoicePreviousBalance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `capturedAt` | `?DateTime` | Optional | - | getCapturedAt(): ?\DateTime | setCapturedAt(?\DateTime capturedAt): void |
| `invoices` | [`?(InvoiceBalanceItem[])`](../../doc/models/invoice-balance-item.md) | Optional | - | getInvoices(): ?array | setInvoices(?array invoices): void |

## Example (as JSON)

```json
{
  "captured_at": "2016-03-13T12:52:32.123Z",
  "invoices": [
    {
      "uid": "uid6",
      "number": "number6",
      "outstanding_amount": "outstanding_amount8"
    }
  ]
}
```

