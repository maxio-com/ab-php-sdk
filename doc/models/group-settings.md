
# Group Settings

## Structure

`GroupSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `target` | [`GroupTarget`](../../doc/models/group-target.md) | Required | Attributes of the target customer who will be the responsible payer of the created subscription. Required. | getTarget(): GroupTarget | setTarget(GroupTarget target): void |
| `billing` | [`?GroupBilling`](../../doc/models/group-billing.md) | Optional | (Optional) Attributes related to billing date and accrual. Note: Only applicable for new subscriptions. | getBilling(): ?GroupBilling | setBilling(?GroupBilling billing): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\GroupSettingsBuilder;
use AdvancedBillingLib\Models\Builders\GroupTargetBuilder;
use AdvancedBillingLib\Models\GroupTargetType;
use AdvancedBillingLib\Models\Builders\GroupBillingBuilder;

$groupSettings = GroupSettingsBuilder::init(
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
    ->build();
```

