
# Void Invoice Request

## Structure

`VoidInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `void` | [`VoidInvoice`](../../doc/models/void-invoice.md) | Required | - | getVoid(): VoidInvoice | setVoid(VoidInvoice void): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\VoidInvoiceRequestBuilder;
use AdvancedBillingLib\Models\Builders\VoidInvoiceBuilder;

$voidInvoiceRequest = VoidInvoiceRequestBuilder::init(
    VoidInvoiceBuilder::init(
        'reason6'
    )->build()
)->build();
```

