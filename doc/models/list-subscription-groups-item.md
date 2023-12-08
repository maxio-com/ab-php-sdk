
# List Subscription Groups Item

## Structure

`ListSubscriptionGroupsItem`

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
| `accountBalances` | [`?SubscriptionGroupBalances`](../../doc/models/subscription-group-balances.md) | Optional | - | getAccountBalances(): ?SubscriptionGroupBalances | setAccountBalances(?SubscriptionGroupBalances accountBalances): void |

## Example (as JSON)

```json
{
  "uid": "uid0",
  "scheme": 124,
  "customer_id": 144,
  "payment_profile_id": 52,
  "subscription_ids": [
    254
  ]
}
```

