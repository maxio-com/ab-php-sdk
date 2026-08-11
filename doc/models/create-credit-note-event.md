
# Create Credit Note Event

## Structure

`CreateCreditNoteEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::CREATE_CREDIT_NOTE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`CreditNote`](../../doc/models/credit-note.md) | Required | Example schema for an `create_credit_note` event | getEventData(): CreditNote | setEventData(CreditNote eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateCreditNoteEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;

$createCreditNoteEvent = CreateCreditNoteEventBuilder::init(
    82,
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
    InvoiceEventType::CREATE_CREDIT_NOTE,
    CreditNoteBuilder::init()
        ->uid('uid6')
        ->siteId(132)
        ->customerId(244)
        ->subscriptionId(60)
        ->number('number6')
        ->build()
)->build();
```

