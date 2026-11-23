
# Feature Catalog Items List Response

## Structure

`FeatureCatalogItemsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `features` | [`FeatureCatalogItem[]`](../../doc/models/feature-catalog-item.md) | Required | - | getFeatures(): array | setFeatures(array features): void |
| `subscriptionsCount` | `int` | Required | The number of subscriptions on this product/component that would be affected if a feature catalog item change were propagated with `propagate_to_subscriptions=true`. | getSubscriptionsCount(): int | setSubscriptionsCount(int subscriptionsCount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureCatalogItemsListResponseBuilder;
use AdvancedBillingLib\Models\Builders\FeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$featureCatalogItemsListResponse = FeatureCatalogItemsListResponseBuilder::init(
    [
        FeatureCatalogItemBuilder::init()
            ->id(174)
            ->featureTemplateId(164)
            ->featureKey('feature_key2')
            ->featureName('feature_name6')
            ->featureKind(FeatureKind::ACCESS_RIGHT)
            ->build()
    ],
    22
)->build();
```

