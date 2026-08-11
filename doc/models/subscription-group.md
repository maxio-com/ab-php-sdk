
# Subscription Group

## Structure

`SubscriptionGroup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paymentProfile` | [`?SubscriptionGroupPaymentProfile`](../../doc/models/subscription-group-payment-profile.md) | Optional | - | getPaymentProfile(): ?SubscriptionGroupPaymentProfile | setPaymentProfile(?SubscriptionGroupPaymentProfile paymentProfile): void |
| `paymentCollectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`. | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `subscriptionIds` | `?(int[])` | Optional | - | getSubscriptionIds(): ?array | setSubscriptionIds(?array subscriptionIds): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupPaymentProfileBuilder;
use AdvancedBillingLib\Models\CollectionMethod;

$subscriptionGroup = SubscriptionGroupBuilder::init()
    ->uid('uid8')
    ->customerId(78)
    ->paymentProfile(
        SubscriptionGroupPaymentProfileBuilder::init()
            ->id(44)
            ->firstName('first_name4')
            ->lastName('last_name2')
            ->maskedCardNumber('masked_card_number2')
            ->build()
    )
    ->paymentCollectionMethod(CollectionMethod::AUTOMATIC)
    ->subscriptionIds(
        [
            188,
            189,
            190
        ]
    )
    ->build();
```

