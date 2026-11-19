
# Create Feature Catalog Item Request

The owning product or component is taken from the URL and must not be included in the request body.

## Structure

`CreateFeatureCatalogItemRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`Feature2`](../../doc/models/feature-2.md) | Required | - | getFeature(): Feature2 | setFeature(Feature2 feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateFeatureCatalogItemRequestBuilder;
use AdvancedBillingLib\Models\Builders\Feature2Builder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;
use AdvancedBillingLib\Models\FeatureOwnerPricePointType;

$createFeatureCatalogItemRequest = CreateFeatureCatalogItemRequestBuilder::init(
    Feature2Builder::init(
        196
    )
        ->value('value6')
        ->periodicityInterval(68)
        ->periodicityUnit(EntitlementPeriodicityUnit::WEEK)
        ->pricePointType(FeatureOwnerPricePointType::PRODUCTPRICEPOINT)
        ->pricePointId(84)
        ->propagateToSubscriptions(false)
        ->build()
)->build();
```

