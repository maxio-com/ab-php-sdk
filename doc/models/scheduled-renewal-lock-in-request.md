
# Scheduled Renewal Lock in Request

## Structure

`ScheduledRenewalLockInRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lockInAt` | `DateTime` | Required | Date to lock in the renewal. | getLockInAt(): \DateTime | setLockInAt(\DateTime lockInAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalLockInRequestBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$scheduledRenewalLockInRequest = ScheduledRenewalLockInRequestBuilder::init(
    DateTimeHelper::fromSimpleDateRequired('2016-03-13')
)->build();
```

