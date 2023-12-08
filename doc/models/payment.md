
# Payment

## Structure

`Payment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceUid` | `?string` | Optional | The uid of the paid invoice | getInvoiceUid(): ?string | setInvoiceUid(?string invoiceUid): void |
| `status` | [`?string(Status)`](../../doc/models/status.md) | Optional | The current status of the invoice. See [Invoice Statuses](https://chargify.zendesk.com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more. | getStatus(): ?string | setStatus(?string status): void |
| `dueAmount` | `?string` | Optional | The remaining due amount on the invoice | getDueAmount(): ?string | setDueAmount(?string dueAmount): void |
| `paidAmount` | `?string` | Optional | The total amount paid on this invoice (including any prior payments) | getPaidAmount(): ?string | setPaidAmount(?string paidAmount): void |

## Example (as JSON)

```json
{
  "invoice_uid": "invoice_uid8",
  "status": "voided",
  "due_amount": "due_amount0",
  "paid_amount": "paid_amount0"
}
```

