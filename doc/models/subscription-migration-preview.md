
# Subscription Migration Preview

## Structure

`SubscriptionMigrationPreview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `proratedAdjustmentInCents` | `?int` | Optional | The amount of the prorated adjustment that would be issued for the current subscription. | getProratedAdjustmentInCents(): ?int | setProratedAdjustmentInCents(?int proratedAdjustmentInCents): void |
| `chargeInCents` | `?int` | Optional | The amount of the charge that would be created for the new product. | getChargeInCents(): ?int | setChargeInCents(?int chargeInCents): void |
| `paymentDueInCents` | `?int` | Optional | The amount of the payment due in the case of an upgrade. | getPaymentDueInCents(): ?int | setPaymentDueInCents(?int paymentDueInCents): void |
| `creditAppliedInCents` | `?int` | Optional | Represents a credit in cents that is applied to your subscription as part of a migration process for a specific product, which reduces the amount owed for the subscription. | getCreditAppliedInCents(): ?int | setCreditAppliedInCents(?int creditAppliedInCents): void |

## Example (as JSON)

```json
{
  "prorated_adjustment_in_cents": 134,
  "charge_in_cents": 16,
  "payment_due_in_cents": 188,
  "credit_applied_in_cents": 148
}
```

