
# Add Subscription to a Group

## Structure

`AddSubscriptionToAGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `group` | [`?GroupSettings`](../../doc/models/group-settings.md) | Optional | - | getGroup(): ?GroupSettings | setGroup(?GroupSettings group): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AddSubscriptionToAGroupBuilder;
use AdvancedBillingLib\Models\Builders\GroupSettingsBuilder;
use AdvancedBillingLib\Models\Builders\GroupTargetBuilder;
use AdvancedBillingLib\Models\GroupTargetType;
use AdvancedBillingLib\Models\Builders\GroupBillingBuilder;

$addSubscriptionToAGroup = AddSubscriptionToAGroupBuilder::init()
    ->group(
        GroupSettingsBuilder::init(
            GroupTargetBuilder::init(
                GroupTargetType::PARENT_
            )
                ->id(236)
                ->build()
        )
            ->billing(
                GroupBillingBuilder::init()
                    ->accrue(false)
                    ->alignDate(false)
                    ->prorate(false)
                    ->build()
            )
            ->build()
    )
    ->build();
```

