
# Subscription MRR Response

## Structure

`SubscriptionMRRResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionsMrr` | [`SubscriptionMRR[]`](../../doc/models/subscription-mrr.md) | Required | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getSubscriptionsMrr(): array | setSubscriptionsMrr(array subscriptionsMrr): void |

## Example (as JSON)

```json
{
  "subscriptions_mrr": [
    {
      "subscription_id": 0,
      "mrr_amount_in_cents": 0,
      "breakouts": {
        "plan_amount_in_cents": 0,
        "usage_amount_in_cents": 0
      }
    }
  ]
}
```

