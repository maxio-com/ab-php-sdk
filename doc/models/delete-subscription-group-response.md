
# Delete Subscription Group Response

## Structure

`DeleteSubscriptionGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `deleted` | `?bool` | Optional | - | getDeleted(): ?bool | setDeleted(?bool deleted): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DeleteSubscriptionGroupResponseBuilder;

$deleteSubscriptionGroupResponse = DeleteSubscriptionGroupResponseBuilder::init()
    ->uid('uid0')
    ->deleted(false)
    ->build();
```

