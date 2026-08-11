
# Too Many Management Link Requests

## Structure

`TooManyManagementLinkRequests`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | `string` | Required | - | getError(): string | setError(string error): void |
| `newLinkAvailableAt` | `DateTime` | Required | - | getNewLinkAvailableAt(): \DateTime | setNewLinkAvailableAt(\DateTime newLinkAvailableAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\TooManyManagementLinkRequestsBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$tooManyManagementLinkRequests = TooManyManagementLinkRequestsBuilder::init(
    'error8',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

