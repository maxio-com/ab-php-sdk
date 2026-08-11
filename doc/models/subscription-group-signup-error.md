
# Subscription Group Signup Error

## Structure

`SubscriptionGroupSignupError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptions` | [`?array<string,SubscriptionGroupSubscriptionError>`](../../doc/models/subscription-group-subscription-error.md) | Optional | Object that as key have subscription position in request subscriptions array and as value subscription errors object. | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `payer` | [`?PayerError`](../../doc/models/payer-error.md) | Optional | - | getPayer(): ?PayerError | setPayer(?PayerError payer): void |
| `subscriptionGroup` | `?(string[])` | Optional | - | getSubscriptionGroup(): ?array | setSubscriptionGroup(?array subscriptionGroup): void |
| `paymentProfileId` | `?string` | Optional | - | getPaymentProfileId(): ?string | setPaymentProfileId(?string paymentProfileId): void |
| `payerId` | `?string` | Optional | - | getPayerId(): ?string | setPayerId(?string payerId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupErrorBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSubscriptionErrorBuilder;
use AdvancedBillingLib\Models\Builders\PayerErrorBuilder;

$subscriptionGroupSignupError = SubscriptionGroupSignupErrorBuilder::init()
    ->subscriptions(
        [
            'key0' => SubscriptionGroupSubscriptionErrorBuilder::init()
                ->product(
                    [
                        'product9'
                    ]
                )
                ->productPricePointId(
                    [
                        'product_price_point_id7'
                    ]
                )
                ->paymentProfile(
                    [
                        'payment_profile2'
                    ]
                )
                ->paymentProfileChargifyToken(
                    [
                        'payment_profile.chargify_token6'
                    ]
                )
                ->base(
                    [
                        'base5',
                        'base6'
                    ]
                )
                ->build(),
            'key1' => SubscriptionGroupSubscriptionErrorBuilder::init()
                ->product(
                    [
                        'product9'
                    ]
                )
                ->productPricePointId(
                    [
                        'product_price_point_id7'
                    ]
                )
                ->paymentProfile(
                    [
                        'payment_profile2'
                    ]
                )
                ->paymentProfileChargifyToken(
                    [
                        'payment_profile.chargify_token6'
                    ]
                )
                ->base(
                    [
                        'base5',
                        'base6'
                    ]
                )
                ->build(),
            'key2' => SubscriptionGroupSubscriptionErrorBuilder::init()
                ->product(
                    [
                        'product9'
                    ]
                )
                ->productPricePointId(
                    [
                        'product_price_point_id7'
                    ]
                )
                ->paymentProfile(
                    [
                        'payment_profile2'
                    ]
                )
                ->paymentProfileChargifyToken(
                    [
                        'payment_profile.chargify_token6'
                    ]
                )
                ->base(
                    [
                        'base5',
                        'base6'
                    ]
                )
                ->build()
        ]
    )
    ->payerReference('payer_reference8')
    ->payer(
        PayerErrorBuilder::init()
            ->lastName(
                [
                    'last_name5',
                    'last_name6'
                ]
            )
            ->firstName(
                [
                    'first_name8'
                ]
            )
            ->email(
                [
                    'email0',
                    'email9'
                ]
            )
            ->build()
    )
    ->subscriptionGroup(
        [
            'subscription_group3',
            'subscription_group4',
            'subscription_group5'
        ]
    )
    ->paymentProfileId('payment_profile_id4')
    ->build();
```

