
# Subscription Group Signup

## Structure

`SubscriptionGroupSignup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfileId` | `?int` | Optional | - | getPaymentProfileId(): ?int | setPaymentProfileId(?int paymentProfileId): void |
| `payerId` | `?int` | Optional | - | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerReference` | `?string` | Optional | - | getPayerReference(): ?string | setPayerReference(?string payerReference): void |
| `paymentCollectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | The type of payment collection to be used in the subscription. For legacy Statements Architecture valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid options are - `remittance`, `automatic`, `prepaid`. | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `payerAttributes` | [`?PayerAttributes`](../../doc/models/payer-attributes.md) | Optional | - | getPayerAttributes(): ?PayerAttributes | setPayerAttributes(?PayerAttributes payerAttributes): void |
| `creditCardAttributes` | [`?SubscriptionGroupCreditCard`](../../doc/models/subscription-group-credit-card.md) | Optional | - | getCreditCardAttributes(): ?SubscriptionGroupCreditCard | setCreditCardAttributes(?SubscriptionGroupCreditCard creditCardAttributes): void |
| `bankAccountAttributes` | [`?SubscriptionGroupBankAccount`](../../doc/models/subscription-group-bank-account.md) | Optional | - | getBankAccountAttributes(): ?SubscriptionGroupBankAccount | setBankAccountAttributes(?SubscriptionGroupBankAccount bankAccountAttributes): void |
| `subscriptions` | [`SubscriptionGroupSignupItem[]`](../../doc/models/subscription-group-signup-item.md) | Required | - | getSubscriptions(): array | setSubscriptions(array subscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupItemBuilder;
use AdvancedBillingLib\Models\CollectionMethod;
use AdvancedBillingLib\Models\Builders\PayerAttributesBuilder;

$subscriptionGroupSignup = SubscriptionGroupSignupBuilder::init(
    [
        SubscriptionGroupSignupItemBuilder::init()
            ->productHandle('product_handle8')
            ->productId(144)
            ->productPricePointId(68)
            ->productPricePointHandle('product_price_point_handle4')
            ->offerId(40)
            ->metafields(
                [
                    'custom_field_name_1' => 'custom_field_value_1',
                    'custom_field_name_2' => 'custom_field_value_2'
                ]
            )
            ->build()
    ]
)
    ->paymentProfileId(124)
    ->payerId(146)
    ->payerReference('payer_reference0')
    ->paymentCollectionMethod(CollectionMethod::PREPAID)
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

