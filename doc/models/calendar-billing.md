
# Calendar Billing

(Optional). Cannot be used when also specifying next_billing_at

## Structure

`CalendarBilling`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `snapDay` | int\|string([SnapDay](../../doc/models/snap-day.md))\|null | Optional | This is a container for one-of cases. | getSnapDay(): | setSnapDay( snapDay): void |
| `calendarBillingFirstCharge` | [`?string(FirstChargeType)`](../../doc/models/first-charge-type.md) | Optional | - | getCalendarBillingFirstCharge(): ?string | setCalendarBillingFirstCharge(?string calendarBillingFirstCharge): void |

## Example (as JSON)

```json
{
  "snap_day": 28,
  "calendar_billing_first_charge": "prorated"
}
```

