
# Customer Payer Change

## Structure

`CustomerPayerChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | [`InvoicePayerChange`](../../doc/models/invoice-payer-change.md) | Required | - | getBefore(): InvoicePayerChange | setBefore(InvoicePayerChange before): void |
| `after` | [`InvoicePayerChange`](../../doc/models/invoice-payer-change.md) | Required | - | getAfter(): InvoicePayerChange | setAfter(InvoicePayerChange after): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerPayerChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoicePayerChangeBuilder;

$customerPayerChange = CustomerPayerChangeBuilder::init(
    InvoicePayerChangeBuilder::init()
        ->firstName('first_name0')
        ->lastName('last_name8')
        ->organization('organization4')
        ->email('email6')
        ->build(),
    InvoicePayerChangeBuilder::init()
        ->firstName('first_name2')
        ->lastName('last_name0')
        ->organization('organization4')
        ->email('email4')
        ->build()
)->build();
```

