
# Feature Catalog Item Response

## Structure

`FeatureCatalogItemResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`FeatureCatalogItem`](../../doc/models/feature-catalog-item.md) | Required | A feature template attached to a specific product or component (or one of their price points), with a concrete value. When a subscriber signs up for or is assigned this product/component, the feature catalog item is provisioned as an entitlement on their subscription. | getFeature(): FeatureCatalogItem | setFeature(FeatureCatalogItem feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureCatalogItemResponseBuilder;
use AdvancedBillingLib\Models\Builders\FeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$featureCatalogItemResponse = FeatureCatalogItemResponseBuilder::init(
    FeatureCatalogItemBuilder::init()
        ->id(206)
        ->featureTemplateId(196)
        ->featureKey('feature_key2')
        ->featureName('feature_name6')
        ->featureKind(FeatureKind::SERVICE_RIGHT)
        ->build()
)->build();
```

