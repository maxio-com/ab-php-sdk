
# Update Subscription Request

## Structure

`UpdateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`UpdateSubscription`](../../doc/models/update-subscription.md) | Required | - | getSubscription(): UpdateSubscription | setSubscription(UpdateSubscription subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateSubscriptionBuilder;
use AdvancedBillingLib\Models\Builders\CreditCardAttributesBuilder;

$updateSubscriptionRequest = UpdateSubscriptionRequestBuilder::init(
    UpdateSubscriptionBuilder::init()
        ->creditCardAttributes(
            CreditCardAttributesBuilder::init()
                ->fullNumber('full_number2')
                ->expirationMonth('expiration_month6')
                ->expirationYear('expiration_year2')
                ->build()
        )
        ->productHandle('product_handle6')
        ->productId(206)
        ->productChangeDelayed(false)
        ->nextProductId('next_product_id6')
        ->deferSignup(false)
        ->dunningCommunicationDelayTimeZone('"Eastern Time (US & Canada)"')
        ->build()
)->build();
```

