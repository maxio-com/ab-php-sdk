
# Create Metadata

## Structure

`CreateMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMetadataBuilder;

$createMetadata = CreateMetadataBuilder::init()
    ->name('name0')
    ->value('value2')
    ->build();
```

