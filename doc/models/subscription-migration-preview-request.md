
# Subscription Migration Preview Request

## Structure

`SubscriptionMigrationPreviewRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `migration` | [`SubscriptionMigrationPreviewOptions`](../../doc/models/subscription-migration-preview-options.md) | Required | - | getMigration(): SubscriptionMigrationPreviewOptions | setMigration(SubscriptionMigrationPreviewOptions migration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionMigrationPreviewRequestBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionMigrationPreviewOptionsBuilder;

$subscriptionMigrationPreviewRequest = SubscriptionMigrationPreviewRequestBuilder::init(
    SubscriptionMigrationPreviewOptionsBuilder::init()
        ->productId(158)
        ->productPricePointId(82)
        ->includeTrial(false)
        ->includeInitialCharge(false)
        ->includeCoupons(true)
        ->preservePeriod(false)
        ->build()
)->build();
```

