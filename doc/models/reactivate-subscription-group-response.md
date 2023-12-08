
# Reactivate Subscription Group Response

## Structure

`ReactivateSubscriptionGroupResponse`

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

## Example (as JSON)

```json
{
  "uid": "uid4",
  "scheme": 66,
  "customer_id": 86,
  "payment_profile_id": 250,
  "subscription_ids": [
    196,
    197
  ]
}
```

