
# Chargeback Status

The current chargeback status.

## Enumeration

`ChargebackStatus`

## Fields

| Name |
|  --- |
| `OPEN` |
| `LOST` |
| `WON` |
| `CLOSED` |

## Example

```php
use AdvancedBillingLib\Models\ChargebackStatus;

$chargebackStatus = ChargebackStatus::OPEN;
```

