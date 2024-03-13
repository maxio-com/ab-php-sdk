
# Create Subscription Group

## Structure

`CreateSubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `memberIds` | `?(int[])` | Optional | - | getMemberIds(): ?array | setMemberIds(?array memberIds): void |

## Example (as JSON)

```json
{
  "subscription_id": 38,
  "member_ids": [
    162
  ]
}
```

