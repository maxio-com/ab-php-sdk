
# Line Item Transaction Type

A handle for the line item transaction type

## Enumeration

`LineItemTransactionType`

## Fields

| Name |
|  --- |
| `CHARGE` |
| `CREDIT` |
| `ADJUSTMENT` |
| `PAYMENT` |
| `REFUND` |
| `INFO_TRANSACTION` |
| `PAYMENT_AUTHORIZATION` |

## Example

```php
use AdvancedBillingLib\Models\LineItemTransactionType;

$lineItemTransactionType = LineItemTransactionType::PAYMENT;
```

