
# Prepaid Configuration

## Structure

`PrepaidConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `initialFundingAmountInCents` | `?int` | Optional | - | getInitialFundingAmountInCents(): ?int | setInitialFundingAmountInCents(?int initialFundingAmountInCents): void |
| `replenishToAmountInCents` | `?int` | Optional | - | getReplenishToAmountInCents(): ?int | setReplenishToAmountInCents(?int replenishToAmountInCents): void |
| `autoReplenish` | `?bool` | Optional | - | getAutoReplenish(): ?bool | setAutoReplenish(?bool autoReplenish): void |
| `replenishThresholdAmountInCents` | `?int` | Optional | - | getReplenishThresholdAmountInCents(): ?int | setReplenishThresholdAmountInCents(?int replenishThresholdAmountInCents): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PrepaidConfigurationBuilder;

$prepaidConfiguration = PrepaidConfigurationBuilder::init()
    ->id(146)
    ->initialFundingAmountInCents(78)
    ->replenishToAmountInCents(80)
    ->autoReplenish(false)
    ->replenishThresholdAmountInCents(232)
    ->build();
```

