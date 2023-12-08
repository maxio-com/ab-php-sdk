
# Create Subscription Group Request

## Structure

`CreateSubscriptionGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`CreateSubscriptionGroup`](../../doc/models/create-subscription-group.md) | Required | - | getSubscriptionGroup(): CreateSubscriptionGroup | setSubscriptionGroup(CreateSubscriptionGroup subscriptionGroup): void |

## Example (as JSON)

```json
{
  "subscription_group": {
    "subscription_id": "String9",
    "member_ids": [
      164,
      165
    ]
  }
}
```

