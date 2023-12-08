
# Dunner Data

## Structure

`DunnerData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `revenueAtRiskInCents` | `int` | Required | - | getRevenueAtRiskInCents(): int | setRevenueAtRiskInCents(int revenueAtRiskInCents): void |
| `createdAt` | `string` | Required | - | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `attempts` | `int` | Required | - | getAttempts(): int | setAttempts(int attempts): void |
| `lastAttemptedAt` | `string` | Required | - | getLastAttemptedAt(): string | setLastAttemptedAt(string lastAttemptedAt): void |

## Example (as JSON)

```json
{
  "state": "state4",
  "subscription_id": 126,
  "revenue_at_risk_in_cents": 30,
  "created_at": "created_at6",
  "attempts": 110,
  "last_attempted_at": "last_attempted_at2"
}
```

