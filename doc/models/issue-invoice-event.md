
# Issue Invoice Event

## Structure

`IssueInvoiceEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::ISSUE_INVOICE` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`IssueInvoiceEventData`](../../doc/models/issue-invoice-event-data.md) | Required | Example schema for an `issue_invoice` event | getEventData(): IssueInvoiceEventData | setEventData(IssueInvoiceEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\IssueInvoiceEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceStatus;
use AdvancedBillingLib\Models\InvoiceConsolidationLevel;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\IssueInvoiceEventDataBuilder;

$issueInvoiceEvent = IssueInvoiceEventBuilder::init(
    144,
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
    InvoiceEventType::ISSUE_INVOICE,
    IssueInvoiceEventDataBuilder::init(
        InvoiceConsolidationLevel::CHILD,
        InvoiceStatus::OPEN,
        InvoiceStatus::PENDING,
        'due_amount8',
        'total_amount2'
    )->build()
)->build();
```

