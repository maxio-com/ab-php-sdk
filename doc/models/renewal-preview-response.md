
# Renewal Preview Response

## Structure

`RenewalPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `renewalPreview` | [`RenewalPreview`](../../doc/models/renewal-preview.md) | Required | - | getRenewalPreview(): RenewalPreview | setRenewalPreview(RenewalPreview renewalPreview): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RenewalPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\RenewalPreviewBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$renewalPreviewResponse = RenewalPreviewResponseBuilder::init(
    RenewalPreviewBuilder::init()
        ->nextAssessmentAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->subtotalInCents(132)
        ->totalTaxInCents(0)
        ->totalDiscountInCents(250)
        ->totalInCents(20)
        ->build()
)->build();
```

