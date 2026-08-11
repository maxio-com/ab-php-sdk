
# Attribute Error

## Structure

`AttributeError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attribute` | `string[]` | Required | - | getAttribute(): array | setAttribute(array attribute): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AttributeErrorBuilder;

$attributeError = AttributeErrorBuilder::init(
    [
        'attribute8',
        'attribute7'
    ]
)->build();
```

