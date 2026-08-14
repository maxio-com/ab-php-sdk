
# Signup Proforma Preview Response

## Structure

`SignupProformaPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `proformaInvoicePreview` | [`SignupProformaPreview`](../../doc/models/signup-proforma-preview.md) | Required | - | getProformaInvoicePreview(): SignupProformaPreview | setProformaInvoicePreview(SignupProformaPreview proformaInvoicePreview): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SignupProformaPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\SignupProformaPreviewBuilder;
use AdvancedBillingLib\Models\Builders\ProformaInvoiceBuilder;

$signupProformaPreviewResponse = SignupProformaPreviewResponseBuilder::init(
    SignupProformaPreviewBuilder::init()
        ->currentProformaInvoice(
            ProformaInvoiceBuilder::init()
                ->uid('uid6')
                ->siteId(72)
                ->customerId(184)
                ->subscriptionId(0)
                ->number(132)
                ->build()
        )
        ->nextProformaInvoice(
            ProformaInvoiceBuilder::init()
                ->uid('uid8')
                ->siteId(212)
                ->customerId(68)
                ->subscriptionId(140)
                ->number(16)
                ->build()
        )
        ->build()
)->build();
```

