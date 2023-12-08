
# Subscription State Change

## Structure

`SubscriptionStateChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousSubscriptionState` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPreviousSubscriptionState(): string | setPreviousSubscriptionState(string previousSubscriptionState): void |
| `newSubscriptionState` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getNewSubscriptionState(): string | setNewSubscriptionState(string newSubscriptionState): void |

## Example (as JSON)

```json
{
  "previous_subscription_state": "previous_subscription_state2",
  "new_subscription_state": "new_subscription_state6"
}
```

