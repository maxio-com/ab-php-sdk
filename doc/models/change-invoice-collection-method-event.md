
# Change Invoice Collection Method Event

## Structure

`ChangeInvoiceCollectionMethodEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::CHANGE_INVOICE_COLLECTION_METHOD` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ChangeInvoiceCollectionMethodEventData`](../../doc/models/change-invoice-collection-method-event-data.md) | Required | Example schema for an `change_invoice_collection_method` event | getEventData(): ChangeInvoiceCollectionMethodEventData | setEventData(ChangeInvoiceCollectionMethodEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChangeInvoiceCollectionMethodEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ChangeInvoiceCollectionMethodEventDataBuilder;

$changeInvoiceCollectionMethodEvent = ChangeInvoiceCollectionMethodEventBuilder::init(
    110,
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
    InvoiceEventType::CHANGE_INVOICE_COLLECTION_METHOD,
    ChangeInvoiceCollectionMethodEventDataBuilder::init(
        'from_collection_method4',
        'to_collection_method8'
    )->build()
)->build();
```

