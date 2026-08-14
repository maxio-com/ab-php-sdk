
# Address Change

## Structure

`AddressChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | [`InvoiceAddress`](../../doc/models/invoice-address.md) | Required | - | getBefore(): InvoiceAddress | setBefore(InvoiceAddress before): void |
| `after` | [`InvoiceAddress`](../../doc/models/invoice-address.md) | Required | - | getAfter(): InvoiceAddress | setAfter(InvoiceAddress after): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AddressChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceAddressBuilder;

$addressChange = AddressChangeBuilder::init(
    InvoiceAddressBuilder::init()
        ->street('street0')
        ->line2('line24')
        ->city('city0')
        ->state('state6')
        ->zip('zip4')
        ->build(),
    InvoiceAddressBuilder::init()
        ->street('street2')
        ->line2('line26')
        ->city('city8')
        ->state('state2')
        ->zip('zip4')
        ->build()
)->build();
```

