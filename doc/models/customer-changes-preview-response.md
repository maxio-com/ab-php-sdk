
# Customer Changes Preview Response

## Structure

`CustomerChangesPreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `changes` | [`CustomerChange`](../../doc/models/customer-change.md) | Required | - | getChanges(): CustomerChange | setChanges(CustomerChange changes): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerChangesPreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\CustomerChangeBuilder;
use AdvancedBillingLib\Models\Builders\CustomerPayerChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoicePayerChangeBuilder;
use AdvancedBillingLib\Models\Builders\AddressChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceAddressBuilder;
use AdvancedBillingLib\Models\Builders\CustomerCustomFieldsChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceCustomFieldBuilder;
use AdvancedBillingLib\Models\CustomFieldOwner;

$customerChangesPreviewResponse = CustomerChangesPreviewResponseBuilder::init(
    CustomerChangeBuilder::init()
        ->payer(
            CustomerPayerChangeBuilder::init(
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
            )->build()
        )
        ->shippingAddress(
            AddressChangeBuilder::init(
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
            )->build()
        )
        ->billingAddress(
            AddressChangeBuilder::init(
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
            )->build()
        )
        ->customFields(
            CustomerCustomFieldsChangeBuilder::init(
                [
                    InvoiceCustomFieldBuilder::init()
                        ->ownerId(26)
                        ->ownerType(CustomFieldOwner::CUSTOMER)
                        ->name('name0')
                        ->value('value2')
                        ->metadatumId(26)
                        ->build(),
                    InvoiceCustomFieldBuilder::init()
                        ->ownerId(26)
                        ->ownerType(CustomFieldOwner::CUSTOMER)
                        ->name('name0')
                        ->value('value2')
                        ->metadatumId(26)
                        ->build()
                ],
                [
                    InvoiceCustomFieldBuilder::init()
                        ->ownerId(130)
                        ->ownerType(CustomFieldOwner::CUSTOMER)
                        ->name('name2')
                        ->value('value4')
                        ->metadatumId(130)
                        ->build(),
                    InvoiceCustomFieldBuilder::init()
                        ->ownerId(130)
                        ->ownerType(CustomFieldOwner::CUSTOMER)
                        ->name('name2')
                        ->value('value4')
                        ->metadatumId(130)
                        ->build(),
                    InvoiceCustomFieldBuilder::init()
                        ->ownerId(130)
                        ->ownerType(CustomFieldOwner::CUSTOMER)
                        ->name('name2')
                        ->value('value4')
                        ->metadatumId(130)
                        ->build()
                ]
            )->build()
        )->build()
)->build();
```

