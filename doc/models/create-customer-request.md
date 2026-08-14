
# Create Customer Request

## Structure

`CreateCustomerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`CreateCustomer`](../../doc/models/create-customer.md) | Required | - | getCustomer(): CreateCustomer | setCustomer(CreateCustomer customer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateCustomerRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateCustomerBuilder;

$createCustomerRequest = CreateCustomerRequestBuilder::init(
    CreateCustomerBuilder::init(
        'first_name0',
        'last_name8',
        'email6'
    )
        ->ccEmails('cc_emails0')
        ->organization('organization6')
        ->reference('reference4')
        ->address('address6')
        ->address2('address_24')
        ->build()
)->build();
```

