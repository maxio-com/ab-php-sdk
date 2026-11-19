
# Update Feature Template Request

## Structure

`UpdateFeatureTemplateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feature` | [`Feature1`](../../doc/models/feature-1.md) | Required | `key` cannot be changed once set. `kind` cannot be changed once any feature catalog item has been created from this template. | getFeature(): Feature1 | setFeature(Feature1 feature): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateFeatureTemplateRequestBuilder;
use AdvancedBillingLib\Models\Builders\Feature1Builder;
use AdvancedBillingLib\Models\FeatureValueType;

$updateFeatureTemplateRequest = UpdateFeatureTemplateRequestBuilder::init(
    Feature1Builder::init()
        ->name('name4')
        ->description('description4')
        ->unit('unit2')
        ->valueType(FeatureValueType::BOOLEAN)
        ->defaultValue('default_value4')
        ->build()
)->build();
```

