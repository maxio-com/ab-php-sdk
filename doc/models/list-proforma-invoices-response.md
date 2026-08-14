
# List Proforma Invoices Response

## Structure

`ListProformaInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `proformaInvoices` | [`?(ProformaInvoice[])`](../../doc/models/proforma-invoice.md) | Optional | - | getProformaInvoices(): ?array | setProformaInvoices(?array proformaInvoices): void |
| `meta` | [`?ListProformaInvoicesMeta`](../../doc/models/list-proforma-invoices-meta.md) | Optional | - | getMeta(): ?ListProformaInvoicesMeta | setMeta(?ListProformaInvoicesMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListProformaInvoicesResponseBuilder;
use AdvancedBillingLib\Models\Builders\ProformaInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\ListProformaInvoicesMetaBuilder;

$listProformaInvoicesResponse = ListProformaInvoicesResponseBuilder::init()
    ->proformaInvoices(
        [
            ProformaInvoiceBuilder::init()
                ->uid('uid0')
                ->siteId(140)
                ->customerId(252)
                ->subscriptionId(68)
                ->number(56)
                ->build(),
            ProformaInvoiceBuilder::init()
                ->uid('uid0')
                ->siteId(140)
                ->customerId(252)
                ->subscriptionId(68)
                ->number(56)
                ->build(),
            ProformaInvoiceBuilder::init()
                ->uid('uid0')
                ->siteId(140)
                ->customerId(252)
                ->subscriptionId(68)
                ->number(56)
                ->build()
        ]
    )
    ->meta(
        ListProformaInvoicesMetaBuilder::init()
            ->totalCount(150)
            ->currentPage(126)
            ->totalPages(138)
            ->statusCode(168)
            ->build()
    )
    ->build();
```

