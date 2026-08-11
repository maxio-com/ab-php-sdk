
# Create Debit Note Event

## Structure

`CreateDebitNoteEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::CREATE_DEBIT_NOTE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`DebitNote`](../../doc/models/debit-note.md) | Required | Example schema for an `create_debit_note` event | getEventData(): DebitNote | setEventData(DebitNote eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateDebitNoteEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\DebitNoteBuilder;

$createDebitNoteEvent = CreateDebitNoteEventBuilder::init(
    176,
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
    InvoiceEventType::CREATE_DEBIT_NOTE,
    DebitNoteBuilder::init()
        ->uid('uid6')
        ->siteId(132)
        ->customerId(244)
        ->subscriptionId(60)
        ->number(64)
        ->build()
)->build();
```

