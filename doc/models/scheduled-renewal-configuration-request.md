
# Scheduled Renewal Configuration Request

## Structure

`ScheduledRenewalConfigurationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `renewalConfiguration` | [`ScheduledRenewalConfigurationRequestBody`](../../doc/models/scheduled-renewal-configuration-request-body.md) | Required | - | getRenewalConfiguration(): ScheduledRenewalConfigurationRequestBody | setRenewalConfiguration(ScheduledRenewalConfigurationRequestBody renewalConfiguration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationRequestBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationRequestBodyBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$scheduledRenewalConfigurationRequest = ScheduledRenewalConfigurationRequestBuilder::init(
    ScheduledRenewalConfigurationRequestBodyBuilder::init()
        ->startsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->endsAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->lockInAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->contractId(244)
        ->createNewContract(false)
        ->build()
)->build();
```

