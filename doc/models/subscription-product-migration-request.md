
# Subscription Product Migration Request

## Structure

`SubscriptionProductMigrationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `migration` | [`SubscriptionProductMigration`](../../doc/models/subscription-product-migration.md) | Required | - | getMigration(): SubscriptionProductMigration | setMigration(SubscriptionProductMigration migration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionProductMigrationRequestBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionProductMigrationBuilder;

$subscriptionProductMigrationRequest = SubscriptionProductMigrationRequestBuilder::init(
    SubscriptionProductMigrationBuilder::init()
        ->productId(158)
        ->productPricePointId(82)
        ->includeTrial(false)
        ->includeInitialCharge(false)
        ->includeCoupons(true)
        ->preservePeriod(false)
        ->build()
)->build();
```

