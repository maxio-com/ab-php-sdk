
# Prepaid Configuration

## Structure

`PrepaidConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `initialFundingAmountInCents` | `?int` | Optional | - | getInitialFundingAmountInCents(): ?int | setInitialFundingAmountInCents(?int initialFundingAmountInCents): void |
| `replenishToAmountInCents` | `?int` | Optional | - | getReplenishToAmountInCents(): ?int | setReplenishToAmountInCents(?int replenishToAmountInCents): void |
| `autoReplenish` | `?bool` | Optional | - | getAutoReplenish(): ?bool | setAutoReplenish(?bool autoReplenish): void |
| `replenishThresholdAmountInCents` | `?int` | Optional | - | getReplenishThresholdAmountInCents(): ?int | setReplenishThresholdAmountInCents(?int replenishThresholdAmountInCents): void |

## Example (as JSON)

```json
{
  "id": 156,
  "initial_funding_amount_in_cents": 88,
  "replenish_to_amount_in_cents": 166,
  "auto_replenish": false,
  "replenish_threshold_amount_in_cents": 222
}
```

