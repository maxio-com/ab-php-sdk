
# Create Subscription Request

## Structure

`CreateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`CreateSubscription`](../../doc/models/create-subscription.md) | Required | - | getSubscription(): CreateSubscription | setSubscription(CreateSubscription subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionCustomPriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$createSubscriptionRequest = CreateSubscriptionRequestBuilder::init(
    CreateSubscriptionBuilder::init()
        ->productHandle('product_handle6')
        ->productId(206)
        ->productPricePointHandle('product_price_point_handle2')
        ->productPricePointId(130)
        ->customPrice(
            SubscriptionCustomPriceBuilder::init(
                'String3',
                'String3'
            )
                ->name('name4')
                ->handle('handle0')
                ->intervalUnit(IntervalUnit::DAY)
                ->trialPriceInCents(
                    'String3'
                )
                ->trialInterval(
                    'String5'
                )
                ->trialIntervalUnit(IntervalUnit::DAY)
                ->build()
        )
        ->deferSignup(false)
        ->metafields(
            [
                'custom_field_name_1' => 'custom_field_value_1',
                'custom_field_name_2' => 'custom_field_value_2'
            ]
        )
        ->dunningCommunicationDelayEnabled(false)
        ->dunningCommunicationDelayTimeZone('"Eastern Time (US & Canada)"')
        ->build()
)->build();
```

