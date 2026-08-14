
# Invoice Payment Method Type

The type of payment method used. Defaults to other.

## Enumeration

`InvoicePaymentMethodType`

## Fields

| Name |
|  --- |
| `CREDIT_CARD` |
| `CHECK` |
| `CASH` |
| `MONEY_ORDER` |
| `ACH` |
| `OTHER` |

## Example

```php
use AdvancedBillingLib\Models\InvoicePaymentMethodType;

$invoicePaymentMethodType = InvoicePaymentMethodType::CASH;
```

