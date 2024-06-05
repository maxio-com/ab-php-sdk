
# Change Invoice Status Event

## Structure

`ChangeInvoiceStatusEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::CHANGE_INVOICE_STATUS` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ChangeInvoiceStatusEventData`](../../doc/models/change-invoice-status-event-data.md) | Required | Example schema for an `change_invoice_status` event | getEventData(): ChangeInvoiceStatusEventData | setEventData(ChangeInvoiceStatusEventData eventData): void |

## Example (as JSON)

```json
{
  "id": 92,
  "timestamp": "2016-03-13T12:52:32.123Z",
  "invoice": {
    "issue_date": "2024-01-01",
    "due_date": "2024-01-01",
    "paid_date": "2024-01-01",
    "id": 166,
    "uid": "uid6",
    "site_id": 92,
    "customer_id": 204,
    "subscription_id": 20
  },
  "event_type": "change_invoice_status",
  "event_data": {
    "gateway_trans_id": "gateway_trans_id2",
    "amount": "amount8",
    "from_status": "paid",
    "to_status": "paid",
    "consolidation_level": "child"
  }
}
```

