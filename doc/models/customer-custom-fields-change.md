
# Customer Custom Fields Change

## Structure

`CustomerCustomFieldsChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `before` | [`InvoiceCustomField[]`](../../doc/models/invoice-custom-field.md) | Required | - | getBefore(): array | setBefore(array before): void |
| `after` | [`InvoiceCustomField[]`](../../doc/models/invoice-custom-field.md) | Required | - | getAfter(): array | setAfter(array after): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CustomerCustomFieldsChangeBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceCustomFieldBuilder;
use AdvancedBillingLib\Models\CustomFieldOwner;

$customerCustomFieldsChange = CustomerCustomFieldsChangeBuilder::init(
    [
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
            ->build()
    ]
)->build();
```

