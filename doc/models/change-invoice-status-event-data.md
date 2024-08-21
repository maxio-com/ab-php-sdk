
# Change Invoice Status Event Data

Example schema for an `change_invoice_status` event

## Structure

`ChangeInvoiceStatusEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gatewayTransId` | `?string` | Optional | Identifier for the transaction within the payment gateway. | getGatewayTransId(): ?string | setGatewayTransId(?string gatewayTransId): void |
| `amount` | `?string` | Optional | The monetary value associated with the linked payment, expressed in dollars. | getAmount(): ?string | setAmount(?string amount): void |
| `fromStatus` | [`string(InvoiceStatus)`](../../doc/models/invoice-status.md) | Required | The status of the invoice before any changes occurred. See [Invoice Statuses](https://maxio.zendesk.com/hc/en-us/articles/24252287829645-Advanced-Billing-Invoices-Overview#invoice-statuses) for more. | getFromStatus(): string | setFromStatus(string fromStatus): void |
| `toStatus` | [`string(InvoiceStatus)`](../../doc/models/invoice-status.md) | Required | The updated status of the invoice after changes have been made. See [Invoice Statuses](https://maxio.zendesk.com/hc/en-us/articles/24252287829645-Advanced-Billing-Invoices-Overview#invoice-statuses) for more. | getToStatus(): string | setToStatus(string toStatus): void |
| `consolidationLevel` | [`?string(InvoiceConsolidationLevel)`](../../doc/models/invoice-consolidation-level.md) | Optional | - | getConsolidationLevel(): ?string | setConsolidationLevel(?string consolidationLevel): void |

## Example (as JSON)

```json
{
  "gateway_trans_id": "gateway_trans_id2",
  "amount": "amount2",
  "from_status": "draft",
  "to_status": "paid",
  "consolidation_level": "none"
}
```

