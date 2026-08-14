
# Invoice Custom Field

## Structure

`InvoiceCustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ownerId` | `?int` | Optional | - | getOwnerId(): ?int | setOwnerId(?int ownerId): void |
| `ownerType` | [`?string(CustomFieldOwner)`](../../doc/models/custom-field-owner.md) | Optional | - | getOwnerType(): ?string | setOwnerType(?string ownerType): void |
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getValue(): ?string | setValue(?string value): void |
| `metadatumId` | `?int` | Optional | - | getMetadatumId(): ?int | setMetadatumId(?int metadatumId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceCustomFieldBuilder;
use AdvancedBillingLib\Models\CustomFieldOwner;

$invoiceCustomField = InvoiceCustomFieldBuilder::init()
    ->ownerId(14)
    ->ownerType(CustomFieldOwner::CUSTOMER)
    ->name('name0')
    ->value('value2')
    ->metadatumId(14)
    ->build();
```

