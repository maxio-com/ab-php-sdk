
# Base String Error

The error is base if it is not directly associated with a single attribute.

## Structure

`BaseStringError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `base` | `?(string[])` | Optional | - | getBase(): ?array | setBase(?array base): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BaseStringErrorBuilder;

$baseStringError = BaseStringErrorBuilder::init()
    ->base(
        [
            'base5',
            'base6'
        ]
    )
    ->build();
```

