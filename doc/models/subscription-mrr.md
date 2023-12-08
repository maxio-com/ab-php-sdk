
# Subscription MRR

## Structure

`SubscriptionMRR`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `mrrAmountInCents` | `int` | Required | - | getMrrAmountInCents(): int | setMrrAmountInCents(int mrrAmountInCents): void |
| `breakouts` | [`?SubscriptionMRRBreakout`](../../doc/models/subscription-mrr-breakout.md) | Optional | - | getBreakouts(): ?SubscriptionMRRBreakout | setBreakouts(?SubscriptionMRRBreakout breakouts): void |

## Example (as JSON)

```json
{
  "subscription_id": 4,
  "mrr_amount_in_cents": 22,
  "breakouts": {
    "plan_amount_in_cents": 254,
    "usage_amount_in_cents": 106
  }
}
```

