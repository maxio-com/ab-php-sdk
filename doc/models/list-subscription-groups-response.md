
# List Subscription Groups Response

## Structure

`ListSubscriptionGroupsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroups` | [`?(ListSubscriptionGroupsItem[])`](../../doc/models/list-subscription-groups-item.md) | Optional | - | getSubscriptionGroups(): ?array | setSubscriptionGroups(?array subscriptionGroups): void |
| `meta` | [`?ListSubscriptionGroupsMeta`](../../doc/models/list-subscription-groups-meta.md) | Optional | - | getMeta(): ?ListSubscriptionGroupsMeta | setMeta(?ListSubscriptionGroupsMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupsItemBuilder;
use AdvancedBillingLib\Models\Builders\ListSubscriptionGroupsMetaBuilder;

$listSubscriptionGroupsResponse = ListSubscriptionGroupsResponseBuilder::init()
    ->subscriptionGroups(
        [
            ListSubscriptionGroupsItemBuilder::init()
                ->uid('uid2')
                ->scheme(166)
                ->customerId(186)
                ->paymentProfileId(162)
                ->subscriptionIds(
                    [
                        40
                    ]
                )
                ->build()
        ]
    )
    ->meta(
        ListSubscriptionGroupsMetaBuilder::init()
            ->currentPage(126)
            ->totalCount(150)
            ->build()
    )
    ->build();
```

