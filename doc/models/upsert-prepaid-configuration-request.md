
# Upsert Prepaid Configuration Request

## Structure

`UpsertPrepaidConfigurationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepaidConfiguration` | [`UpsertPrepaidConfiguration`](../../doc/models/upsert-prepaid-configuration.md) | Required | - | getPrepaidConfiguration(): UpsertPrepaidConfiguration | setPrepaidConfiguration(UpsertPrepaidConfiguration prepaidConfiguration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpsertPrepaidConfigurationRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpsertPrepaidConfigurationBuilder;

$upsertPrepaidConfigurationRequest = UpsertPrepaidConfigurationRequestBuilder::init(
    UpsertPrepaidConfigurationBuilder::init()
        ->initialFundingAmountInCents(74)
        ->replenishToAmountInCents(76)
        ->autoReplenish(false)
        ->replenishThresholdAmountInCents(20)
        ->build()
)->build();
```

