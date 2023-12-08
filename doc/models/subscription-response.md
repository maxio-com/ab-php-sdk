
# Subscription Response

## Structure

`SubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`?Subscription`](../../doc/models/subscription.md) | Optional | - | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |

## Example (as JSON)

```json
{
  "subscription": {
    "id": 8,
    "state": "paused",
    "balance_in_cents": 124,
    "total_revenue_in_cents": 48,
    "product_price_in_cents": 238
  }
}
```

