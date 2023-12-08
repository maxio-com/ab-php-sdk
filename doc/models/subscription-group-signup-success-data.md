
# Subscription Group Signup Success Data

## Structure

`SubscriptionGroupSignupSuccessData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `scheme` | `int` | Required | - | getScheme(): int | setScheme(int scheme): void |
| `customerId` | `int` | Required | - | getCustomerId(): int | setCustomerId(int customerId): void |
| `paymentProfileId` | `int` | Required | - | getPaymentProfileId(): int | setPaymentProfileId(int paymentProfileId): void |
| `subscriptionIds` | `int[]` | Required | - | getSubscriptionIds(): array | setSubscriptionIds(array subscriptionIds): void |
| `primarySubscriptionId` | `int` | Required | - | getPrimarySubscriptionId(): int | setPrimarySubscriptionId(int primarySubscriptionId): void |
| `nextAssessmentAt` | `string` | Required | - | getNextAssessmentAt(): string | setNextAssessmentAt(string nextAssessmentAt): void |
| `state` | `string` | Required | - | getState(): string | setState(string state): void |
| `cancelAtEndOfPeriod` | `bool` | Required | - | getCancelAtEndOfPeriod(): bool | setCancelAtEndOfPeriod(bool cancelAtEndOfPeriod): void |

## Example (as JSON)

```json
{
  "uid": "uid8",
  "scheme": 154,
  "customer_id": 174,
  "payment_profile_id": 82,
  "subscription_ids": [
    28,
    29
  ],
  "primary_subscription_id": 102,
  "next_assessment_at": "next_assessment_at2",
  "state": "state4",
  "cancel_at_end_of_period": false
}
```

