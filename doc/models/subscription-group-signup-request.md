
# Subscription Group Signup Request

## Structure

`SubscriptionGroupSignupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`SubscriptionGroupSignup`](../../doc/models/subscription-group-signup.md) | Required | - | getSubscriptionGroup(): SubscriptionGroupSignup | setSubscriptionGroup(SubscriptionGroupSignup subscriptionGroup): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupRequestBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupItemBuilder;
use AdvancedBillingLib\Models\CollectionMethod;
use AdvancedBillingLib\Models\Builders\PayerAttributesBuilder;

$subscriptionGroupSignupRequest = SubscriptionGroupSignupRequestBuilder::init(
    SubscriptionGroupSignupBuilder::init(
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
        ->paymentProfileId(128)
        ->payerId(150)
        ->payerReference('payer_reference6')
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
        ->build()
)->build();
```

