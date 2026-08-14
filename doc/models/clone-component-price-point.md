
# Clone Component Price Point

## Structure

`CloneComponentPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CloneComponentPricePointBuilder;

$cloneComponentPricePoint = CloneComponentPricePointBuilder::init(
    'name4'
)
    ->handle('handle0')
    ->build();
```

