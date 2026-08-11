
# Cancel Grouped Subscriptions Request

## Structure

`CancelGroupedSubscriptionsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargeUnbilledUsage` | `?bool` | Optional | - | getChargeUnbilledUsage(): ?bool | setChargeUnbilledUsage(?bool chargeUnbilledUsage): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CancelGroupedSubscriptionsRequestBuilder;

$cancelGroupedSubscriptionsRequest = CancelGroupedSubscriptionsRequestBuilder::init()
    ->chargeUnbilledUsage(false)
    ->build();
```

