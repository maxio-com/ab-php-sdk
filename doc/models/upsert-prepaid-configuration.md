
# Upsert Prepaid Configuration

## Structure

`UpsertPrepaidConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `initialFundingAmountInCents` | `?int` | Optional | - | getInitialFundingAmountInCents(): ?int | setInitialFundingAmountInCents(?int initialFundingAmountInCents): void |
| `replenishToAmountInCents` | `?int` | Optional | - | getReplenishToAmountInCents(): ?int | setReplenishToAmountInCents(?int replenishToAmountInCents): void |
| `autoReplenish` | `?bool` | Optional | - | getAutoReplenish(): ?bool | setAutoReplenish(?bool autoReplenish): void |
| `replenishThresholdAmountInCents` | `?int` | Optional | - | getReplenishThresholdAmountInCents(): ?int | setReplenishThresholdAmountInCents(?int replenishThresholdAmountInCents): void |

## Example (as JSON)

```json
{
  "initial_funding_amount_in_cents": 40,
  "replenish_to_amount_in_cents": 42,
  "auto_replenish": false,
  "replenish_threshold_amount_in_cents": 242
}
```

