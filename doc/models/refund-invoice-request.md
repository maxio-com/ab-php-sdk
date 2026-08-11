
# Refund Invoice Request

## Structure

`RefundInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refund` | [RefundInvoice](../../doc/models/refund-invoice.md)\|[RefundConsolidatedInvoice](../../doc/models/refund-consolidated-invoice.md) | Required | This is a container for any-of cases. | getRefund(): | setRefund( refund): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RefundInvoiceRequestBuilder;
use AdvancedBillingLib\Models\Builders\RefundInvoiceBuilder;

$refundInvoiceRequest = RefundInvoiceRequestBuilder::init(
    RefundInvoiceBuilder::init(
        'amount8',
        'memo0',
        0
    )
        ->external(false)
        ->applyCredit(false)
        ->voidInvoice(false)
        ->build()
)->build();
```

