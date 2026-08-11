
# Pending Cancellation Change

## Structure

`PendingCancellationChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cancellationState` | `string` | Required | - | getCancellationState(): string | setCancellationState(string cancellationState): void |
| `cancelsAt` | `DateTime` | Required | - | getCancelsAt(): \DateTime | setCancelsAt(\DateTime cancelsAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PendingCancellationChangeBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$pendingCancellationChange = PendingCancellationChangeBuilder::init(
    'cancellation_state0',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

