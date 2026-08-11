
# Auto Resume

## Structure

`AutoResume`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `automaticallyResumeAt` | `?DateTime` | Optional | - | getAutomaticallyResumeAt(): ?\DateTime | setAutomaticallyResumeAt(?\DateTime automaticallyResumeAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AutoResumeBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$autoResume = AutoResumeBuilder::init()
    ->automaticallyResumeAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

