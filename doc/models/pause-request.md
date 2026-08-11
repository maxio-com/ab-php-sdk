
# Pause Request

Allows you to pause a Subscription.

## Structure

`PauseRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hold` | [`?AutoResume`](../../doc/models/auto-resume.md) | Optional | - | getHold(): ?AutoResume | setHold(?AutoResume hold): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PauseRequestBuilder;
use AdvancedBillingLib\Models\Builders\AutoResumeBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$pauseRequest = PauseRequestBuilder::init()
    ->hold(
        AutoResumeBuilder::init()
            ->automaticallyResumeAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

