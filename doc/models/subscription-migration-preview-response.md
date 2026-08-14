
# Subscription Migration Preview Response

## Structure

`SubscriptionMigrationPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `migration` | [`SubscriptionMigrationPreview`](../../doc/models/subscription-migration-preview.md) | Required | - | getMigration(): SubscriptionMigrationPreview | setMigration(SubscriptionMigrationPreview migration): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionMigrationPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionMigrationPreviewBuilder;

$subscriptionMigrationPreviewResponse = SubscriptionMigrationPreviewResponseBuilder::init(
    SubscriptionMigrationPreviewBuilder::init()
        ->proratedAdjustmentInCents(196)
        ->chargeInCents(78)
        ->paymentDueInCents(250)
        ->creditAppliedInCents(210)
        ->build()
)->build();
```

