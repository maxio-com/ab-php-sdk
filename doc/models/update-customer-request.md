
# Update Customer Request

## Structure

`UpdateCustomerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`UpdateCustomer`](../../doc/models/update-customer.md) | Required | - | getCustomer(): UpdateCustomer | setCustomer(UpdateCustomer customer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateCustomerRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateCustomerBuilder;

$updateCustomerRequest = UpdateCustomerRequestBuilder::init(
    UpdateCustomerBuilder::init()
        ->firstName('first_name0')
        ->lastName('last_name8')
        ->email('email6')
        ->ccEmails('cc_emails0')
        ->organization('organization6')
        ->build()
)->build();
```

