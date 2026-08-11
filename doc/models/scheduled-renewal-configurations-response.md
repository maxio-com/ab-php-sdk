
# Scheduled Renewal Configurations Response

## Structure

`ScheduledRenewalConfigurationsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `scheduledRenewalConfigurations` | [`?(ScheduledRenewalConfiguration[])`](../../doc/models/scheduled-renewal-configuration.md) | Optional | - | getScheduledRenewalConfigurations(): ?array | setScheduledRenewalConfigurations(?array scheduledRenewalConfigurations): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$scheduledRenewalConfigurationsResponse = ScheduledRenewalConfigurationsResponseBuilder::init()
    ->scheduledRenewalConfigurations(
        [
            ScheduledRenewalConfigurationBuilder::init()
                ->id(122)
                ->siteId(48)
                ->subscriptionId(232)
                ->startsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                ->endsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                ->build()
        ]
    )
    ->build();
```

