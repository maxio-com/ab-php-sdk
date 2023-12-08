
# Coupon Usage

## Structure

`CouponUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify id of the product | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | Name of the product | getName(): ?string | setName(?string name): void |
| `signups` | `?int` | Optional | Number of times the coupon has been applied | getSignups(): ?int | setSignups(?int signups): void |
| `savings` | `?int` | Optional | Dollar amount of customer savings as a result of the coupon. | getSavings(): ?int | setSavings(?int savings): void |
| `savingsInCents` | `?int` | Optional | Dollar amount of customer savings as a result of the coupon. | getSavingsInCents(): ?int | setSavingsInCents(?int savingsInCents): void |
| `revenue` | `?int` | Optional | Total revenue of the all subscriptions that have received a discount from this coupon. | getRevenue(): ?int | setRevenue(?int revenue): void |
| `revenueInCents` | `?int` | Optional | Total revenue of the all subscriptions that have received a discount from this coupon. | getRevenueInCents(): ?int | setRevenueInCents(?int revenueInCents): void |

## Example (as JSON)

```json
{
  "id": 14,
  "name": "name0",
  "signups": 34,
  "savings": 52,
  "savings_in_cents": 138
}
```

