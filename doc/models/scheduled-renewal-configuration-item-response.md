
# Scheduled Renewal Configuration Item Response

## Structure

`ScheduledRenewalConfigurationItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `scheduledRenewalConfigurationItem` | [`?ScheduledRenewalConfigurationItem`](../../doc/models/scheduled-renewal-configuration-item.md) | Optional | - | getScheduledRenewalConfigurationItem(): ?ScheduledRenewalConfigurationItem | setScheduledRenewalConfigurationItem(?ScheduledRenewalConfigurationItem scheduledRenewalConfigurationItem): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationItemResponseBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationItemBuilder;

$scheduledRenewalConfigurationItemResponse = ScheduledRenewalConfigurationItemResponseBuilder::init()
    ->scheduledRenewalConfigurationItem(
        ScheduledRenewalConfigurationItemBuilder::init()
            ->id(98)
            ->subscriptionId(208)
            ->subscriptionRenewalConfigurationId(108)
            ->itemId(246)
            ->itemType('item_type2')
            ->build()
    )
    ->build();
```

