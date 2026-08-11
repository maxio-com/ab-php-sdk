
# EBB Event

## Structure

`EBBEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargify` | [`?ChargifyEBB`](../../doc/models/chargify-ebb.md) | Optional | - | getChargify(): ?ChargifyEBB | setChargify(?ChargifyEBB chargify): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EBBEventBuilder;
use AdvancedBillingLib\Models\Builders\ChargifyEBBBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$eBBEvent = EBBEventBuilder::init()
    ->chargify(
        ChargifyEBBBuilder::init()
            ->timestamp(DateTimeHelper::fromRfc3339DateTime('2020-02-27T17:45:50-05:00'))
            ->subscriptionId(1)
            ->build()
    )
    ->build();
```

