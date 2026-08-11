
# Sale Rep

## Structure

`SaleRep`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `fullName` | `?string` | Optional | - | getFullName(): ?string | setFullName(?string fullName): void |
| `subscriptionsCount` | `?int` | Optional | - | getSubscriptionsCount(): ?int | setSubscriptionsCount(?int subscriptionsCount): void |
| `testMode` | `?bool` | Optional | - | getTestMode(): ?bool | setTestMode(?bool testMode): void |
| `subscriptions` | [`?(SaleRepSubscription[])`](../../doc/models/sale-rep-subscription.md) | Optional | - | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SaleRepBuilder;
use AdvancedBillingLib\Models\Builders\SaleRepSubscriptionBuilder;

$saleRep = SaleRepBuilder::init()
    ->id(78)
    ->fullName('full_name0')
    ->subscriptionsCount(102)
    ->testMode(false)
    ->subscriptions(
        [
            SaleRepSubscriptionBuilder::init()
                ->id(202)
                ->siteName('site_name8')
                ->subscriptionUrl('subscription_url2')
                ->customerName('customer_name8')
                ->createdAt('created_at4')
                ->build(),
            SaleRepSubscriptionBuilder::init()
                ->id(202)
                ->siteName('site_name8')
                ->subscriptionUrl('subscription_url2')
                ->customerName('customer_name8')
                ->createdAt('created_at4')
                ->build(),
            SaleRepSubscriptionBuilder::init()
                ->id(202)
                ->siteName('site_name8')
                ->subscriptionUrl('subscription_url2')
                ->customerName('customer_name8')
                ->createdAt('created_at4')
                ->build()
        ]
    )
    ->build();
```

