
# Referral Code

## Structure

`ReferralCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ReferralCodeBuilder;

$referralCode = ReferralCodeBuilder::init()
    ->id(186)
    ->siteId(112)
    ->subscriptionId(40)
    ->code('code6')
    ->build();
```

