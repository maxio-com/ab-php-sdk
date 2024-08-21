
# Refund Invoice Event

## Structure

`RefundInvoiceEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::REFUND_INVOICE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`RefundInvoiceEventData`](../../doc/models/refund-invoice-event-data.md) | Required | Example schema for an `refund_invoice` event | getEventData(): RefundInvoiceEventData | setEventData(RefundInvoiceEventData eventData): void |

## Example (as JSON)

```json
{
  "id": 54,
  "timestamp": "2016-03-13T12:52:32.123Z",
  "invoice": {
    "issue_date": "2024-01-01",
    "due_date": "2024-01-01",
    "paid_date": "2024-01-01",
    "public_url_expires_on": "2024-01-21",
    "id": 166,
    "uid": "uid6",
    "site_id": 92,
    "customer_id": 204,
    "subscription_id": 20
  },
  "event_type": "refund_invoice",
  "event_data": {
    "apply_credit": false,
    "consolidation_level": "child",
    "credit_note_attributes": {
      "uid": "uid2",
      "site_id": 72,
      "customer_id": 184,
      "subscription_id": 0,
      "number": "number0"
    },
    "memo": "memo0",
    "original_amount": "original_amount0",
    "payment_id": 204,
    "refund_amount": "refund_amount8",
    "refund_id": 248,
    "transaction_time": "2016-03-13T12:52:32.123Z"
  }
}
```

