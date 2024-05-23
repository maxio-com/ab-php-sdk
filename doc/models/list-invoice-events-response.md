
# List Invoice Events Response

## Structure

`ListInvoiceEventsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `events` | array<[ApplyCreditNoteEvent](../../doc/models/apply-credit-note-event.md)\|[ApplyDebitNoteEvent](../../doc/models/apply-debit-note-event.md)\|[ApplyPaymentEvent](../../doc/models/apply-payment-event.md)\|[BackportInvoiceEvent](../../doc/models/backport-invoice-event.md)\|[ChangeChargebackStatusEvent](../../doc/models/change-chargeback-status-event.md)\|[ChangeInvoiceCollectionMethodEvent](../../doc/models/change-invoice-collection-method-event.md)\|[ChangeInvoiceStatusEvent](../../doc/models/change-invoice-status-event.md)\|[CreateCreditNoteEvent](../../doc/models/create-credit-note-event.md)\|[CreateDebitNoteEvent](../../doc/models/create-debit-note-event.md)\|[FailedPaymentEvent](../../doc/models/failed-payment-event.md)\|[IssueInvoiceEvent](../../doc/models/issue-invoice-event.md)\|[RefundInvoiceEvent](../../doc/models/refund-invoice-event.md)\|[RemovePaymentEvent](../../doc/models/remove-payment-event.md)\|[VoidInvoiceEvent](../../doc/models/void-invoice-event.md)\|[VoidRemainderEvent](../../doc/models/void-remainder-event.md)>\|null | Optional | - | getEvents(): ?array | setEvents(?array events): void |
| `page` | `?int` | Optional | - | getPage(): ?int | setPage(?int page): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |

## Example (as JSON)

```json
{
  "events": [
    {
      "event_type": "apply_credit_note",
      "id": 214,
      "timestamp": "2016-03-13T12:52:32.123Z",
      "invoice": {
        "id": 166,
        "uid": "uid6",
        "site_id": 92,
        "customer_id": 204,
        "subscription_id": 20
      },
      "event_data": {
        "uid": "uid6",
        "credit_note_number": "credit_note_number0",
        "credit_note_uid": "credit_note_uid0",
        "original_amount": "original_amount0",
        "applied_amount": "applied_amount2",
        "transaction_time": "2016-03-13T12:52:32.123Z",
        "memo": "memo0",
        "role": "role0",
        "consolidated_invoice": false,
        "applied_credit_notes": [
          {
            "uid": "uid4",
            "number": "number8"
          },
          {
            "uid": "uid4",
            "number": "number8"
          },
          {
            "uid": "uid4",
            "number": "number8"
          }
        ]
      }
    }
  ],
  "page": 184,
  "per_page": 96,
  "total_pages": 194
}
```

