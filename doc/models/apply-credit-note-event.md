
# Apply Credit Note Event

## Structure

`ApplyCreditNoteEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::APPLY_CREDIT_NOTE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ApplyCreditNoteEventData`](../../doc/models/apply-credit-note-event-data.md) | Required | Example schema for an `apply_credit_note` event | getEventData(): ApplyCreditNoteEventData | setEventData(ApplyCreditNoteEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ApplyCreditNoteEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ApplyCreditNoteEventDataBuilder;
use AdvancedBillingLib\Models\Builders\AppliedCreditNoteDataBuilder;

$applyCreditNoteEvent = ApplyCreditNoteEventBuilder::init(
    86,
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
    InvoiceEventType::APPLY_CREDIT_NOTE,
    ApplyCreditNoteEventDataBuilder::init(
        'uid6',
        'credit_note_number0',
        'credit_note_uid0',
        'original_amount0',
        'applied_amount2'
    )
        ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->memo('memo0')
        ->role('role0')
        ->consolidatedInvoice(false)
        ->appliedCreditNotes(
            [
                AppliedCreditNoteDataBuilder::init()
                    ->uid('uid4')
                    ->number('number8')
                    ->build(),
                AppliedCreditNoteDataBuilder::init()
                    ->uid('uid4')
                    ->number('number8')
                    ->build(),
                AppliedCreditNoteDataBuilder::init()
                    ->uid('uid4')
                    ->number('number8')
                    ->build()
            ]
        )
        ->build()
)->build();
```

