
# Scheduled Renewal Configuration Response

## Structure

`ScheduledRenewalConfigurationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `scheduledRenewalConfiguration` | [`?ScheduledRenewalConfiguration`](../../doc/models/scheduled-renewal-configuration.md) | Optional | - | getScheduledRenewalConfiguration(): ?ScheduledRenewalConfiguration | setScheduledRenewalConfiguration(?ScheduledRenewalConfiguration scheduledRenewalConfiguration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationResponseBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$scheduledRenewalConfigurationResponse = ScheduledRenewalConfigurationResponseBuilder::init()
    ->scheduledRenewalConfiguration(
        ScheduledRenewalConfigurationBuilder::init()
            ->id(134)
            ->siteId(60)
            ->subscriptionId(244)
            ->startsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->endsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

