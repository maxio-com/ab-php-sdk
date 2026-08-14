
# Invoice Payment Type

The type of payment to be applied to an Invoice. Defaults to external.

## Enumeration

`InvoicePaymentType`

## Fields

| Name |
|  --- |
| `EXTERNAL` |
| `PREPAYMENT` |
| `SERVICE_CREDIT` |
| `PAYMENT` |

## Example

```php
use AdvancedBillingLib\Models\InvoicePaymentType;

$invoicePaymentType = InvoicePaymentType::EXTERNAL;
```

