
# Full Subscription Group Response

## Structure

`FullSubscriptionGroupResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `scheme` | `?int` | Optional | - | getScheme(): ?int | setScheme(?int scheme): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |
| `subscriptionIds` | `?(int[])` | Optional | - | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |
| `primarySubscriptionId` | `?int` | Optional | - | getPrimarySubscriptionId(): ?int | setPrimarySubscriptionId(?int primarySubscriptionId): void |
| `nextAssessmentAt` | `?string` | Optional | - | getNextAssessmentAt(): ?string | setNextAssessmentAt(?string nextAssessmentAt): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `cancelAtEndOfPeriod` | `?bool` | Optional | - | getCancelAtEndOfPeriod(): ?bool | setCancelAtEndOfPeriod(?bool cancelAtEndOfPeriod): void |
| `currentBillingAmountInCents` | `?int` | Optional | - | getCurrentBillingAmountInCents(): ?int | setCurrentBillingAmountInCents(?int currentBillingAmountInCents): void |
| `customer` | [`?SubscriptionGroupCustomer`](../../doc/models/subscription-group-customer.md) | Optional | - | getCustomer(): ?SubscriptionGroupCustomer | setCustomer(?SubscriptionGroupCustomer customer): void |
| `accountBalances` | [`?SubscriptionGroupBalances`](../../doc/models/subscription-group-balances.md) | Optional | - | getAccountBalances(): ?SubscriptionGroupBalances | setAccountBalances(?SubscriptionGroupBalances accountBalances): void |

## Example (as JSON)

```json
{
  "uid": "uid8",
  "scheme": 90,
  "customer_id": 110,
  "payment_profile_id": 18,
  "subscription_ids": [
    220,
    221,
    222
  ]
}
```

