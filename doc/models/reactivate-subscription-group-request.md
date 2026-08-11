
# Reactivate Subscription Group Request

## Structure

`ReactivateSubscriptionGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resume` | `?bool` | Optional | - | getResume(): ?bool | setResume(?bool resume): void |
| `resumeMembers` | `?bool` | Optional | - | getResumeMembers(): ?bool | setResumeMembers(?bool resumeMembers): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReactivateSubscriptionGroupRequestBuilder;

$reactivateSubscriptionGroupRequest = ReactivateSubscriptionGroupRequestBuilder::init()
    ->resume(false)
    ->resumeMembers(false)
    ->build();
```

