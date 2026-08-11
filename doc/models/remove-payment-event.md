
# Remove Payment Event

## Structure

`RemovePaymentEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::REMOVE_PAYMENT` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`RemovePaymentEventData`](../../doc/models/remove-payment-event-data.md) | Required | Example schema for an `remove_payment` event | getEventData(): RemovePaymentEventData | setEventData(RemovePaymentEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RemovePaymentEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\RemovePaymentEventDataBuilder;
use AdvancedBillingLib\Models\Builders\PaymentMethodApplePayBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$removePaymentEvent = RemovePaymentEventBuilder::init(
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
    InvoiceEventType::REMOVE_PAYMENT,
    RemovePaymentEventDataBuilder::init(
        78,
        'memo0',
        'applied_amount2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        PaymentMethodApplePayBuilder::init(
            InvoiceEventPaymentMethod::APPLE_PAY
        )->build(),
        false
    )
        ->originalAmount('original_amount0')
        ->build()
)->build();
```

