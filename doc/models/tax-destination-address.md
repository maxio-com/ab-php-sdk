
# Tax Destination Address

## Enumeration

`TaxDestinationAddress`

## Fields

| Name |
|  --- |
| `SHIPPING_THEN_BILLING` |
| `BILLING_THEN_SHIPPING` |
| `SHIPPING_ONLY` |
| `BILLING_ONLY` |

## Example

```php
use AdvancedBillingLib\Models\TaxDestinationAddress;

$taxDestinationAddress = TaxDestinationAddress::SHIPPING_ONLY;
```

