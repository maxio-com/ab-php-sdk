
# Upsert Prepaid Configuration

## Structure

`UpsertPrepaidConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `initialFundingAmountInCents` | `?int` | Optional | - | getInitialFundingAmountInCents(): ?int | setInitialFundingAmountInCents(?int initialFundingAmountInCents): void |
| `replenishToAmountInCents` | `?int` | Optional | - | getReplenishToAmountInCents(): ?int | setReplenishToAmountInCents(?int replenishToAmountInCents): void |
| `autoReplenish` | `?bool` | Optional | - | getAutoReplenish(): ?bool | setAutoReplenish(?bool autoReplenish): void |
| `replenishThresholdAmountInCents` | `?int` | Optional | - | getReplenishThresholdAmountInCents(): ?int | setReplenishThresholdAmountInCents(?int replenishThresholdAmountInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpsertPrepaidConfigurationBuilder;

$upsertPrepaidConfiguration = UpsertPrepaidConfigurationBuilder::init()
    ->initialFundingAmountInCents(244)
    ->replenishToAmountInCents(246)
    ->autoReplenish(false)
    ->replenishThresholdAmountInCents(190)
    ->build();
```

