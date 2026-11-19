
# Update Feature Catalog Item Request

## Structure

`UpdateFeatureCatalogItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`Feature3`](../../doc/models/feature-3.md) | Required | - | getFeature(): Feature3 | setFeature(Feature3 feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateFeatureCatalogItemRequestBuilder;
use AdvancedBillingLib\Models\Builders\Feature3Builder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;

$updateFeatureCatalogItemRequest = UpdateFeatureCatalogItemRequestBuilder::init(
    Feature3Builder::init()
        ->value('value6')
        ->periodicityInterval(68)
        ->periodicityUnit(EntitlementPeriodicityUnit::WEEK)
        ->propagateToSubscriptions(false)
        ->build()
)->build();
```

