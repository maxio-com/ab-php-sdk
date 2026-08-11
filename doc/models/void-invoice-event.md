
# Void Invoice Event

## Structure

`VoidInvoiceEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::VOID_INVOICE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`VoidInvoiceEventData`](../../doc/models/void-invoice-event-data.md) | Required | Example schema for an `void_invoice` event | getEventData(): VoidInvoiceEventData | setEventData(VoidInvoiceEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\VoidInvoiceEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\VoidInvoiceEventDataBuilder;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;

$voidInvoiceEvent = VoidInvoiceEventBuilder::init(
    236,
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
    InvoiceEventType::VOID_INVOICE,
    VoidInvoiceEventDataBuilder::init(
        false,
        'reason2'
    )
        ->creditNoteAttributes(
            CreditNoteBuilder::init()
                ->uid('uid2')
                ->siteId(72)
                ->customerId(184)
                ->subscriptionId(0)
                ->number('number0')
                ->build()
        )
        ->memo('memo0')
        ->appliedAmount('applied_amount2')
        ->transactionTime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->build()
)->build();
```

