
# Subscription Group Signup Event Data

## Structure

`SubscriptionGroupSignupEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionGroup` | [`SubscriptionGroupSignupFailureData`](../../doc/models/subscription-group-signup-failure-data.md) | Required | - | getSubscriptionGroup(): SubscriptionGroupSignupFailureData | setSubscriptionGroup(SubscriptionGroupSignupFailureData subscriptionGroup): void |
| `customer` | [`?Customer`](../../doc/models/customer.md) | Required | - | getCustomer(): ?Customer | setCustomer(?Customer customer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupEventDataBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionGroupSignupFailureDataBuilder;
use AdvancedBillingLib\Models\Builders\PayerAttributesBuilder;
use AdvancedBillingLib\Models\Builders\CustomerBuilder;

$subscriptionGroupSignupEventData = SubscriptionGroupSignupEventDataBuilder::init(
    SubscriptionGroupSignupFailureDataBuilder::init()
        ->payerId(150)
        ->payerReference('payer_reference6')
        ->paymentProfileId(128)
        ->paymentCollectionMethod('payment_collection_method8')
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
)
    ->customer(
        CustomerBuilder::init()
            ->firstName('first_name0')
            ->lastName('last_name8')
            ->email('email6')
            ->ccEmails('cc_emails0')
            ->organization('organization6')
            ->build()
    )
    ->build();
```

