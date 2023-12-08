
# List Subscription Groups Response

## Structure

`ListSubscriptionGroupsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroups` | [`?(ListSubscriptionGroupsItem[])`](../../doc/models/list-subscription-groups-item.md) | Optional | - | getSubscriptionGroups(): ?array | setSubscriptionGroups(?array subscriptionGroups): void |
| `meta` | [`?ListSubscriptionGroupsMeta`](../../doc/models/list-subscription-groups-meta.md) | Optional | - | getMeta(): ?ListSubscriptionGroupsMeta | setMeta(?ListSubscriptionGroupsMeta meta): void |

## Example (as JSON)

```json
{
  "subscription_groups": [
    {
      "uid": "uid2",
      "scheme": 166,
      "customer_id": 186,
      "payment_profile_id": 162,
      "subscription_ids": [
        40
      ]
    },
    {
      "uid": "uid2",
      "scheme": 166,
      "customer_id": 186,
      "payment_profile_id": 162,
      "subscription_ids": [
        40
      ]
    },
    {
      "uid": "uid2",
      "scheme": 166,
      "customer_id": 186,
      "payment_profile_id": 162,
      "subscription_ids": [
        40
      ]
    }
  ],
  "meta": {
    "current_page": 126,
    "total_count": 150
  }
}
```

