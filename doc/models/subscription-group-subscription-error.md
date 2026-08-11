
# Subscription Group Subscription Error

Object which contains subscription errors.

## Structure

`SubscriptionGroupSubscriptionError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `product` | `?(string[])` | Optional | - | getProduct(): ?array | setProduct(?array product): void |
| `productPricePointId` | `?(string[])` | Optional | - | getProductPricePointId(): ?array | setProductPricePointId(?array productPricePointId): void |
| `paymentProfile` | `?(string[])` | Optional | - | getPaymentProfile(): ?array | setPaymentProfile(?array paymentProfile): void |
| `paymentProfileChargifyToken` | `?(string[])` | Optional | - | getPaymentProfileChargifyToken(): ?array | setPaymentProfileChargifyToken(?array paymentProfileChargifyToken): void |
| `base` | `?(string[])` | Optional | - | getBase(): ?array | setBase(?array base): void |
| `paymentProfileExpirationMonth` | `?(string[])` | Optional | - | getPaymentProfileExpirationMonth(): ?array | setPaymentProfileExpirationMonth(?array paymentProfileExpirationMonth): void |
| `paymentProfileExpirationYear` | `?(string[])` | Optional | - | getPaymentProfileExpirationYear(): ?array | setPaymentProfileExpirationYear(?array paymentProfileExpirationYear): void |
| `paymentProfileFullNumber` | `?(string[])` | Optional | - | getPaymentProfileFullNumber(): ?array | setPaymentProfileFullNumber(?array paymentProfileFullNumber): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSubscriptionErrorBuilder;

$subscriptionGroupSubscriptionError = SubscriptionGroupSubscriptionErrorBuilder::init()
    ->product(
        [
            'product7',
            'product8'
        ]
    )
    ->productPricePointId(
        [
            'product_price_point_id3',
            'product_price_point_id4'
        ]
    )
    ->paymentProfile(
        [
            'payment_profile8',
            'payment_profile9'
        ]
    )
    ->paymentProfileChargifyToken(
        [
            'payment_profile.chargify_token2',
            'payment_profile.chargify_token3'
        ]
    )
    ->base(
        [
            'base1',
            'base2',
            'base3'
        ]
    )
    ->build();
```

