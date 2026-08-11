
# Update Metadata

## Structure

`UpdateMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentName` | `?string` | Optional | - | getCurrentName(): ?string | setCurrentName(?string currentName): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateMetadataBuilder;

$updateMetadata = UpdateMetadataBuilder::init()
    ->currentName('current_name8')
    ->name('name4')
    ->value('value6')
    ->build();
```

