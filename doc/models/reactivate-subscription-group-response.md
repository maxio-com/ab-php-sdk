
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
| `nextAssessmentAt` | `?DateTime` | Optional | - | getNextAssessmentAt(): ?\DateTime | setNextAssessmentAt(?\DateTime nextAssessmentAt): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `cancelAtEndOfPeriod` | `?bool` | Optional | - | getCancelAtEndOfPeriod(): ?bool | setCancelAtEndOfPeriod(?bool cancelAtEndOfPeriod): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReactivateSubscriptionGroupResponseBuilder;

$reactivateSubscriptionGroupResponse = ReactivateSubscriptionGroupResponseBuilder::init()
    ->uid('uid0')
    ->scheme(10)
    ->customerId(30)
    ->paymentProfileId(62)
    ->subscriptionIds(
        [
            140,
            141,
            142
        ]
    )
    ->build();
```

