
# Change Chargeback Status Event Data

Example schema for an `change_chargeback_status` event

## Structure

`ChangeChargebackStatusEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargebackStatus` | [`string(ChargebackStatus)`](../../doc/models/chargeback-status.md) | Required | - | getChargebackStatus(): string | setChargebackStatus(string chargebackStatus): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChangeChargebackStatusEventDataBuilder;
use AdvancedBillingLib\Models\ChargebackStatus;

$changeChargebackStatusEventData = ChangeChargebackStatusEventDataBuilder::init(
    ChargebackStatus::WON
)->build();
```

