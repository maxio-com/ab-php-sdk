
# Cancellation Request

## Structure

`CancellationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`CancellationOptions`](../../doc/models/cancellation-options.md) | Required | - | getSubscription(): CancellationOptions | setSubscription(CancellationOptions subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CancellationRequestBuilder;
use AdvancedBillingLib\Models\Builders\CancellationOptionsBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$cancellationRequest = CancellationRequestBuilder::init(
    CancellationOptionsBuilder::init()
        ->cancellationMessage('cancellation_message2')
        ->reasonCode('reason_code8')
        ->cancelAtEndOfPeriod(false)
        ->scheduledCancellationAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->refundPrepaymentAccountBalance(false)
        ->build()
)->build();
```

