
# Consolidated Invoice

## Structure

`ConsolidatedInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoices` | [`?(Invoice[])`](../../doc/models/invoice.md) | Optional | - | getInvoices(): ?array | setInvoices(?array invoices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ConsolidatedInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;

$consolidatedInvoice = ConsolidatedInvoiceBuilder::init()
    ->invoices(
        [
            InvoiceBuilder::init()
                ->id(196)
                ->uid('uid6')
                ->siteId(122)
                ->customerId(234)
                ->subscriptionId(50)
                ->build(),
            InvoiceBuilder::init()
                ->id(196)
                ->uid('uid6')
                ->siteId(122)
                ->customerId(234)
                ->subscriptionId(50)
                ->build(),
            InvoiceBuilder::init()
                ->id(196)
                ->uid('uid6')
                ->siteId(122)
                ->customerId(234)
                ->subscriptionId(50)
                ->build()
        ]
    )
    ->build();
```

