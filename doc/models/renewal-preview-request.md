
# Renewal Preview Request

## Structure

`RenewalPreviewRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `components` | [`?(RenewalPreviewComponent[])`](../../doc/models/renewal-preview-component.md) | Optional | (Optional) Array of component definitions to preview. Providing any component definitions here will override the actual components on the subscription (and their quantities), and the billing preview will contain only these components (in addition to any product base fees). | getComponents(): ?array | setComponents(?array components): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RenewalPreviewRequestBuilder;
use AdvancedBillingLib\Models\Builders\RenewalPreviewComponentBuilder;

$renewalPreviewRequest = RenewalPreviewRequestBuilder::init()
    ->components(
        [
            RenewalPreviewComponentBuilder::init()
                ->componentId(
                    'String5'
                )
                ->quantity(210)
                ->pricePointId(
                    'String3'
                )
                ->build()
        ]
    )
    ->build();
```

