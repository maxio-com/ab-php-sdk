
# Dunner Data

## Structure

`DunnerData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `revenueAtRiskInCents` | `int` | Required | - | getRevenueAtRiskInCents(): int | setRevenueAtRiskInCents(int revenueAtRiskInCents): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `attempts` | `int` | Required | - | getAttempts(): int | setAttempts(int attempts): void |
| `lastAttemptedAt` | `DateTime` | Required | - | getLastAttemptedAt(): \DateTime | setLastAttemptedAt(\DateTime lastAttemptedAt): void |

## Example (as JSON)

```json
{
  "state": "state4",
  "subscription_id": 126,
  "revenue_at_risk_in_cents": 30,
  "created_at": "2016-03-13T12:52:32.123Z",
  "attempts": 110,
  "last_attempted_at": "2016-03-13T12:52:32.123Z"
}
```

