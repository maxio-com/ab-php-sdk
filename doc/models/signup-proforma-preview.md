
# Signup Proforma Preview

## Structure

`SignupProformaPreview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentProformaInvoice` | [`?ProformaInvoice`](../../doc/models/proforma-invoice.md) | Optional | - | getCurrentProformaInvoice(): ?ProformaInvoice | setCurrentProformaInvoice(?ProformaInvoice currentProformaInvoice): void |
| `nextProformaInvoice` | [`?ProformaInvoice`](../../doc/models/proforma-invoice.md) | Optional | - | getNextProformaInvoice(): ?ProformaInvoice | setNextProformaInvoice(?ProformaInvoice nextProformaInvoice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SignupProformaPreviewBuilder;
use AdvancedBillingLib\Models\Builders\ProformaInvoiceBuilder;

$signupProformaPreview = SignupProformaPreviewBuilder::init()
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
    ->build();
```

