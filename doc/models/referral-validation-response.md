
# Referral Validation Response

## Structure

`ReferralValidationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `referralCode` | [`?ReferralCode`](../../doc/models/referral-code.md) | Optional | - | getReferralCode(): ?ReferralCode | setReferralCode(?ReferralCode referralCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReferralValidationResponseBuilder;
use AdvancedBillingLib\Models\Builders\ReferralCodeBuilder;

$referralValidationResponse = ReferralValidationResponseBuilder::init()
    ->referralCode(
        ReferralCodeBuilder::init()
            ->id(46)
            ->siteId(228)
            ->subscriptionId(156)
            ->code('code0')
            ->build()
    )
    ->build();
```

