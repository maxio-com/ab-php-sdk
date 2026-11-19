
# Entitlement Periodicity Unit

The recurring window over which a `usage_limit` feature's allowance resets.

## Enumeration

`EntitlementPeriodicityUnit`

## Fields

| Name |
|  --- |
| `HOUR` |
| `DAY` |
| `WEEK` |
| `MONTH` |
| `YEAR` |

## Example

```php
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;

$entitlementPeriodicityUnit = EntitlementPeriodicityUnit::MONTH;
```

