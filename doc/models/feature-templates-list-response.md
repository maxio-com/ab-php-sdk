
# Feature Templates List Response

## Structure

`FeatureTemplatesListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`FeatureTemplate[]`](../../doc/models/feature-template.md) | Required | - | getItems(): array | setItems(array items): void |
| `totalCount` | `int` | Required | Total number of feature templates matching the filters, across all pages. | getTotalCount(): int | setTotalCount(int totalCount): void |
| `archivedCount` | `int` | Required | Number of archived feature templates matching the filters. Returned as `0` unless the active result set is empty or `status=archived` was requested. | getArchivedCount(): int | setArchivedCount(int archivedCount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureTemplatesListResponseBuilder;
use AdvancedBillingLib\Models\Builders\FeatureTemplateBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$featureTemplatesListResponse = FeatureTemplatesListResponseBuilder::init(
    [
        FeatureTemplateBuilder::init()
            ->id(66)
            ->key('sso')
            ->name('Single Sign-On')
            ->description('description2')
            ->kind(FeatureKind::ACCESS_RIGHT)
            ->build()
    ],
    54,
    78
)->build();
```

