
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

## Example

```php
use AdvancedBillingLib\Models\Builders\ChangeInvoiceStatusEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceStatus;
use AdvancedBillingLib\Models\InvoiceConsolidationLevel;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ChangeInvoiceStatusEventDataBuilder;

$changeInvoiceStatusEvent = ChangeInvoiceStatusEventBuilder::init(
    148,
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
    InvoiceEventType::CHANGE_INVOICE_STATUS,
    ChangeInvoiceStatusEventDataBuilder::init(
        InvoiceStatus::OPEN,
        InvoiceStatus::PENDING
    )
        ->gatewayTransId('gateway_trans_id2')
        ->amount('amount8')
        ->consolidationLevel(InvoiceConsolidationLevel::CHILD)
        ->build()
)->build();
```

