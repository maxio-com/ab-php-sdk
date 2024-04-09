
# List Mrr Filter

## Structure

`ListMrrFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionIds` | `?(int[])` | Optional | Submit ids in order to limit results. Use in query: `filter[subscription_ids]=1,2,3`.<br>**Constraints**: *Minimum Items*: `1` | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |

## Example (as JSON)

```json
{
  "subscription_ids": [
    1,
    2,
    3
  ]
}
```

