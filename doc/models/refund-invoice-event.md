
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

## Example

```php
use AdvancedBillingLib\Models\Builders\RefundInvoiceEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceConsolidationLevel;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\RefundInvoiceEventDataBuilder;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;

$refundInvoiceEvent = RefundInvoiceEventBuilder::init(
    132,
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
    InvoiceEventType::REFUND_INVOICE,
    RefundInvoiceEventDataBuilder::init(
        false,
        CreditNoteBuilder::init()
            ->uid('uid2')
            ->siteId(72)
            ->customerId(184)
            ->subscriptionId(0)
            ->number('number0')
            ->build(),
        204,
        'refund_amount8',
        248,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )
        ->consolidationLevel(InvoiceConsolidationLevel::CHILD)
        ->memo('memo0')
        ->originalAmount('original_amount0')
        ->build()
)->build();
```

