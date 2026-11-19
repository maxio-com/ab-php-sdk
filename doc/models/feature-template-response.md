
# Feature Template Response

## Structure

`FeatureTemplateResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`FeatureTemplate`](../../doc/models/feature-template.md) | Required | A feature that can be granted to subscribers, defined once at the site level and then attached to products or components. | getFeature(): FeatureTemplate | setFeature(FeatureTemplate feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureTemplateResponseBuilder;
use AdvancedBillingLib\Models\Builders\FeatureTemplateBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$featureTemplateResponse = FeatureTemplateResponseBuilder::init(
    FeatureTemplateBuilder::init()
        ->id(206)
        ->key('sso')
        ->name('Single Sign-On')
        ->description('description4')
        ->kind(FeatureKind::USAGE_LIMIT)
        ->build()
)->build();
```

