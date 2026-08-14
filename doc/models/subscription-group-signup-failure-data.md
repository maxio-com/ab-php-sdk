
# Subscription Group Signup Failure Data

## Structure

`SubscriptionGroupSignupFailureData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | - | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |
| `paymentCollectionMethod` | `?string` | Optional | - | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `payerAttributes` | [`?PayerAttributes`](../../doc/models/payer-attributes.md) | Optional | - | getPayerAttributes(): ?PayerAttributes | setPayerAttributes(?PayerAttributes payerAttributes): void |
| `creditCardAttributes` | [`?SubscriptionGroupCreditCard`](../../doc/models/subscription-group-credit-card.md) | Optional | - | getCreditCardAttributes(): ?SubscriptionGroupCreditCard | setCreditCardAttributes(?SubscriptionGroupCreditCard creditCardAttributes): void |
| `bankAccountAttributes` | [`?SubscriptionGroupBankAccount`](../../doc/models/subscription-group-bank-account.md) | Optional | - | getBankAccountAttributes(): ?SubscriptionGroupBankAccount | setBankAccountAttributes(?SubscriptionGroupBankAccount bankAccountAttributes): void |
| `subscriptions` | [`?(SubscriptionGroupSignupItem[])`](../../doc/models/subscription-group-signup-item.md) | Optional | - | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupFailureDataBuilder;
use AdvancedBillingLib\Models\Builders\PayerAttributesBuilder;

$subscriptionGroupSignupFailureData = SubscriptionGroupSignupFailureDataBuilder::init()
    ->payerId(236)
    ->payerReference('payer_reference2')
    ->paymentProfileId(42)
    ->paymentCollectionMethod('payment_collection_method4')
    ->payerAttributes(
        PayerAttributesBuilder::init()
            ->firstName('first_name2')
            ->lastName('last_name0')
            ->email('email4')
            ->ccEmails('cc_emails2')
            ->organization('organization6')
            ->build()
    )
    ->build();
```

