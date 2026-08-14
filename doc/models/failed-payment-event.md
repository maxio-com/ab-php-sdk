
# Failed Payment Event

## Structure

`FailedPaymentEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::FAILED_PAYMENT` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`FailedPaymentEventData`](../../doc/models/failed-payment-event-data.md) | Required | Example schema for an `failed_payment` event | getEventData(): FailedPaymentEventData | setEventData(FailedPaymentEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FailedPaymentEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\FailedPaymentEventDataBuilder;
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$failedPaymentEvent = FailedPaymentEventBuilder::init(
    186,
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
    InvoiceEventType::FAILED_PAYMENT,
    FailedPaymentEventDataBuilder::init(
        220,
        194,
        InvoicePaymentMethodType::CASH,
        78
    )
        ->memo('memo0')
        ->build()
)->build();
```

