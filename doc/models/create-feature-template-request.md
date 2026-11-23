
# Create Feature Template Request

## Structure

`CreateFeatureTemplateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`Feature`](../../doc/models/feature.md) | Required | - | getFeature(): Feature | setFeature(Feature feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateFeatureTemplateRequestBuilder;
use AdvancedBillingLib\Models\Builders\FeatureBuilder;
use AdvancedBillingLib\Models\FeatureKind;
use AdvancedBillingLib\Models\FeatureValueType;

$createFeatureTemplateRequest = CreateFeatureTemplateRequestBuilder::init(
    FeatureBuilder::init(
        'sso',
        'name4',
        FeatureKind::USAGE_LIMIT
    )
        ->description('description4')
        ->unit('unit2')
        ->valueType(FeatureValueType::BOOLEAN)
        ->defaultValue('default_value4')
        ->defaultPeriodicityInterval(150)
        ->build()
)->build();
```

