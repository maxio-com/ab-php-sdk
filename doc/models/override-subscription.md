
# Override Subscription

## Structure

`OverrideSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `activatedAt` | `?DateTime` | Optional | Can be used to record an external signup date. Chargify uses this field to record when a subscription first goes active (either at signup or at trial end). Only ISO8601 format is supported. | getActivatedAt(): ?\DateTime | setActivatedAt(?\DateTime activatedAt): void |
| `canceledAt` | `?DateTime` | Optional | Can be used to record an external cancellation date. Chargify sets this field automatically when a subscription is canceled, whether by request or via dunning. Only ISO8601 format is supported. | getCanceledAt(): ?\DateTime | setCanceledAt(?\DateTime canceledAt): void |
| `cancellationMessage` | `?string` | Optional | Can be used to record a reason for the original cancellation. | getCancellationMessage(): ?string | setCancellationMessage(?string cancellationMessage): void |
| `expiresAt` | `?DateTime` | Optional | Can be used to record an external expiration date. Chargify sets this field automatically when a subscription expires (ceases billing) after a prescribed amount of time. Only ISO8601 format is supported. This field is not supported when Multi-frequency is enabled for the Site. To change the Term End of a Subscription, use the Update Subscription endpoint. | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `currentPeriodStartsAt` | `?DateTime` | Optional | Can only be used when a subscription is unbilled, which happens when a future initial billing date is passed at subscription creation. The value passed must be before the current date and time. Allows you to set when the period started so mid period component allocations have the correct proration. Only ISO8601 format is supported. | getCurrentPeriodStartsAt(): ?\DateTime | setCurrentPeriodStartsAt(?\DateTime currentPeriodStartsAt): void |

## Example (as JSON)

```json
{
  "activated_at": "2016-03-13T12:52:32.123Z",
  "canceled_at": "2016-03-13T12:52:32.123Z",
  "cancellation_message": "cancellation_message4",
  "expires_at": "2016-03-13T12:52:32.123Z",
  "current_period_starts_at": "2016-03-13T12:52:32.123Z"
}
```

