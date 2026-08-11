
# Calendar Billing

(Optional). Cannot be used when also specifying next_billing_at.

## Structure

`CalendarBilling`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `snapDay` | int\|string\|null | Optional | This is a container for one-of cases. | getSnapDay(): | setSnapDay( snapDay): void |
| `calendarBillingFirstCharge` | [`?string(FirstChargeType)`](../../doc/models/first-charge-type.md) | Optional | - | getCalendarBillingFirstCharge(): ?string | setCalendarBillingFirstCharge(?string calendarBillingFirstCharge): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CalendarBillingBuilder;
use AdvancedBillingLib\Models\FirstChargeType;

$calendarBilling = CalendarBillingBuilder::init()
    ->snapDay(
        200
    )
    ->calendarBillingFirstCharge(FirstChargeType::DELAYED)
    ->build();
```

