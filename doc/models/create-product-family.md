
# Create Product Family

## Structure

`CreateProductFamily`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `surcharging` | `?bool` | Optional | Whether surcharging applies to this product family. Defaults to `true` when omitted. Only applied on sites where surcharging is enabled. | getSurcharging(): ?bool | setSurcharging(?bool surcharging): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductFamilyBuilder;

$createProductFamily = CreateProductFamilyBuilder::init(
    'name0'
)
    ->handle('handle6')
    ->description('description0')
    ->surcharging(false)
    ->build();
```

