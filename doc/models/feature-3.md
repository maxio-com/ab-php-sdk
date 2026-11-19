
# Feature 3

## Structure

`Feature3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |
| `periodicityInterval` | `?int` | Optional | - | getPeriodicityInterval(): ?int | setPeriodicityInterval(?int periodicityInterval): void |
| `periodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | - | getPeriodicityUnit(): ?string | setPeriodicityUnit(?string periodicityUnit): void |
| `propagateToSubscriptions` | `?bool` | Optional | When `true`, existing subscriptions on the item's price point are updated with the new `value`/periodicity by a background job shortly after. Has no effect on a product/component-level item. When `false` (default) and the item's price point already has subscribers, the update is made on a clone of the price point instead, and existing subscribers are unaffected.<br><br>**Default**: `false` | getPropagateToSubscriptions(): ?bool | setPropagateToSubscriptions(?bool propagateToSubscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Feature3Builder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;

$feature3 = Feature3Builder::init()
    ->value('value0')
    ->periodicityInterval(222)
    ->periodicityUnit(EntitlementPeriodicityUnit::DAY)
    ->propagateToSubscriptions(false)
    ->build();
```

