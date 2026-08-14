
# Product Family

## Structure

`ProductFamily`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `accountingCode` | `?string` | Optional | - | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `surcharging` | `?bool` | Optional | Whether surcharging applies to this product family. Only included on sites where surcharging is enabled. | getSurcharging(): ?bool | setSurcharging(?bool surcharging): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `archivedAt` | `?DateTime` | Optional | Timestamp indicating when this product family was archived. `null` if the product family is not archived. | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProductFamilyBuilder;

$productFamily = ProductFamilyBuilder::init()
    ->id(134)
    ->name('name4')
    ->handle('handle0')
    ->accountingCode('accounting_code0')
    ->description('description4')
    ->build();
```

