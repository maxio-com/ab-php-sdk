
# Create Subscription Group

## Structure

`CreateSubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | string\|int | Required | This is a container for one-of cases. | getSubscriptionId(): | setSubscriptionId( subscriptionId): void |
| `memberIds` | `?(int[])` | Optional | - | getMemberIds(): ?array | setMemberIds(?array memberIds): void |

## Example (as JSON)

```json
{
  "subscription_id": "String7",
  "member_ids": [
    162
  ]
}
```

