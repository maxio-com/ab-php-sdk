
# Reactivate Subscription Request

## Structure

`ReactivateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `calendarBilling` | [`?ReactivationBilling`](../../doc/models/reactivation-billing.md) | Optional | These values are only applicable to subscriptions using calendar billing | getCalendarBilling(): ?ReactivationBilling | setCalendarBilling(?ReactivationBilling calendarBilling): void |
| `includeTrial` | `?bool` | Optional | If `true` is sent, the reactivated Subscription will include a trial if one is available. If `false` is sent, the trial period will be ignored. | getIncludeTrial(): ?bool | setIncludeTrial(?bool includeTrial): void |
| `preserveBalance` | `?bool` | Optional | If `true` is passed, the existing subscription balance will NOT be cleared/reset before adding the additional reactivation charges. | getPreserveBalance(): ?bool | setPreserveBalance(?bool preserveBalance): void |
| `couponCode` | `?string` | Optional | The coupon code to be applied during reactivation. | getCouponCode(): ?string | setCouponCode(?string couponCode): void |
| `useCreditsAndPrepayments` | `?bool` | Optional | If true is sent, Chargify will use service credits and prepayments upon reactivation. If false is sent, the service credits and prepayments will be ignored. | getUseCreditsAndPrepayments(): ?bool | setUseCreditsAndPrepayments(?bool useCreditsAndPrepayments): void |
| `resume` | bool\|[ResumeOptions](../../doc/models/resume-options.md)\|null | Optional | This is a container for one-of cases. | getResume(): | setResume( resume): void |

## Example (as JSON)

```json
{
  "calendar_billing": {
    "reactivation_charge": "prorated"
  },
  "include_trial": false,
  "preserve_balance": false,
  "coupon_code": "coupon_code6",
  "use_credits_and_prepayments": false
}
```

