
# Change Chargeback Status Event

## Structure

`ChangeChargebackStatusEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `timestamp` | `DateTime` | Required | - | getTimestamp(): \DateTime | setTimestamp(\DateTime timestamp): void |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |
| `eventType` | [`string(InvoiceEventType)`](../../doc/models/invoice-event-type.md) | Required | **Default**: `InvoiceEventType::CHANGE_CHARGEBACK_STATUS` | getEventType(): string | setEventType(string eventType): void |
| `eventData` | [`ChangeChargebackStatusEventData`](../../doc/models/change-chargeback-status-event-data.md) | Required | Example schema for an `change_chargeback_status` event | getEventData(): ChangeChargebackStatusEventData | setEventData(ChangeChargebackStatusEventData eventData): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChangeChargebackStatusEventBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Models\InvoiceEventType;
use AdvancedBillingLib\Models\Builders\ChangeChargebackStatusEventDataBuilder;
use AdvancedBillingLib\Models\ChargebackStatus;

$changeChargebackStatusEvent = ChangeChargebackStatusEventBuilder::init(
    136,
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
    InvoiceEventType::CHANGE_CHARGEBACK_STATUS,
    ChangeChargebackStatusEventDataBuilder::init(
        ChargebackStatus::WON
    )->build()
)->build();
```

