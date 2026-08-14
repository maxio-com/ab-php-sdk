
# Backport Invoice Event

## Structure

`BackportInvoiceEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::BACKPORT_INVOICE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`Invoice`](../../doc/models/invoice.md) | Required | Example schema for an `backport_invoice` event | getEventData(): Invoice | setEventData(Invoice eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BackportInvoiceEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;

$backportInvoiceEvent = BackportInvoiceEventBuilder::init(
    210,
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
    InvoiceEventType::BACKPORT_INVOICE,
    InvoiceBuilder::init()
        ->id(206)
        ->uid('uid6')
        ->siteId(132)
        ->customerId(244)
        ->subscriptionId(60)
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build()
)->build();
```

