
# Apply Payment Event

## Structure

`ApplyPaymentEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::APPLY_PAYMENT` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ApplyPaymentEventData`](../../doc/models/apply-payment-event-data.md) | Required | Example schema for an `apply_payment` event | getEventData(): ApplyPaymentEventData | setEventData(ApplyPaymentEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ApplyPaymentEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceConsolidationLevel;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ApplyPaymentEventDataBuilder;
use AdvancedBillingLib\Models\Builders\PaymentMethodApplePayBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$applyPaymentEvent = ApplyPaymentEventBuilder::init(
    112,
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
    InvoiceEventType::APPLY_PAYMENT,
    ApplyPaymentEventDataBuilder::init(
        InvoiceConsolidationLevel::CHILD,
        'memo0',
        'original_amount0',
        'applied_amount2',
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        PaymentMethodApplePayBuilder::init(
            InvoiceEventPaymentMethod::APPLE_PAY
        )->build()
    )
        ->transactionId(78)
        ->parentInvoiceNumber(36)
        ->remainingPrepaymentAmount('remaining_prepayment_amount6')
        ->prepayment(false)
        ->external(false)
        ->build()
)->build();
```

