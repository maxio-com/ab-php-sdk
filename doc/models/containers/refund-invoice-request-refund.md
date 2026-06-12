
# Refund Invoice Request Refund

## Data Type

`RefundInvoice|RefundConsolidatedInvoice`

## Cases

| Type |
|  --- |
| [`RefundInvoice`](../../../doc/models/refund-invoice.md) |
| [`RefundConsolidatedInvoice`](../../../doc/models/refund-consolidated-invoice.md) |

## RefundInvoice

### Initialization Code

#### Example

```php
$value = RefundInvoiceBuilder::init(
    'amount8',
    'memo0',
    0
)->build();
```

## RefundConsolidatedInvoice

### Initialization Code

#### Example

```php
$value = RefundConsolidatedInvoiceBuilder::init(
    'memo0',
    46,
    [
        'String0',
        'String1'
    ]
)->build();
```

