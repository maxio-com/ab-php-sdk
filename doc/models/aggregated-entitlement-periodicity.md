
# Aggregated Entitlement Periodicity

## Structure

`AggregatedEntitlementPeriodicity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `interval` | `?int` | Optional | - | getInterval(): ?int | setInterval(?int interval): void |
| `unit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | The recurring window over which a `usage_limit` feature's allowance resets. | getUnit(): ?string | setUnit(?string unit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AggregatedEntitlementPeriodicityBuilder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;

$aggregatedEntitlementPeriodicity = AggregatedEntitlementPeriodicityBuilder::init()
    ->interval(128)
    ->unit(EntitlementPeriodicityUnit::YEAR)
    ->build();
```

