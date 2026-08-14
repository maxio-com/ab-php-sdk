
# Customer Response

## Structure

`CustomerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`Customer`](../../doc/models/customer.md) | Required | - | getCustomer(): Customer | setCustomer(Customer customer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerResponseBuilder;
use AdvancedBillingLib\Models\Builders\CustomerBuilder;

$customerResponse = CustomerResponseBuilder::init(
    CustomerBuilder::init()
        ->firstName('first_name0')
        ->lastName('last_name8')
        ->email('email6')
        ->ccEmails('cc_emails0')
        ->organization('organization6')
        ->build()
)->build();
```

