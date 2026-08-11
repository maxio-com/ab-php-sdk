
# Apply Debit Note Event

## Structure

`ApplyDebitNoteEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::APPLY_DEBIT_NOTE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ApplyDebitNoteEventData`](../../doc/models/apply-debit-note-event-data.md) | Required | Example schema for an `apply_debit_note` event | getEventData(): ApplyDebitNoteEventData | setEventData(ApplyDebitNoteEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ApplyDebitNoteEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ApplyDebitNoteEventDataBuilder;

$applyDebitNoteEvent = ApplyDebitNoteEventBuilder::init(
    180,
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    InvoiceBuilder::init()
        ->id(166)
        ->uid('uid6')
        ->siteId(92)
        ->customerId(204)
        ->subscriptionId(20)
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build(),
    InvoiceEventType::APPLY_DEBIT_NOTE,
    ApplyDebitNoteEventDataBuilder::init(
        'debit_note_number6',
        'debit_note_uid2',
        'original_amount0',
        'applied_amount2'
    )
        ->memo('memo0')
        ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

