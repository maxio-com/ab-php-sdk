
# Prepaid Configuration Response

## Structure

`PrepaidConfigurationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepaidConfiguration` | [`PrepaidConfiguration`](../../doc/models/prepaid-configuration.md) | Required | - | getPrepaidConfiguration(): PrepaidConfiguration | setPrepaidConfiguration(PrepaidConfiguration prepaidConfiguration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaidConfigurationResponseBuilder;
use AdvancedBillingLib\Models\Builders\PrepaidConfigurationBuilder;

$prepaidConfigurationResponse = PrepaidConfigurationResponseBuilder::init(
    PrepaidConfigurationBuilder::init()
        ->id(142)
        ->initialFundingAmountInCents(74)
        ->replenishToAmountInCents(76)
        ->autoReplenish(false)
        ->replenishThresholdAmountInCents(20)
        ->build()
)->build();
```

