
# Create Metafield

## Structure

`CreateMetafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `inputType` | [`?string(MetafieldInput)`](../../doc/models/metafield-input.md) | Optional | Indicates the type of metafield. A text metafield allows any string value. Dropdown and radio metafields have a set of values that can be selected. Defaults to 'text'. | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | `?(string[])` | Optional | Only applicable when input_type is radio or dropdown. Empty strings will not be submitted. | getEnum(): ?array | setEnum(?array enum): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$createMetafield = CreateMetafieldBuilder::init()
    ->name('my_field')
    ->scope(
        MetafieldScopeBuilder::init()
            ->csv(IncludeOption::EXCLUDE)
            ->invoices(IncludeOption::EXCLUDE)
            ->statements(IncludeOption::EXCLUDE)
            ->portal(IncludeOption::EXCLUDE)
            ->publicShow(IncludeOption::EXCLUDE)
            ->publicEdit(IncludeOption::EXCLUDE)
            ->build()
    )
    ->inputType(MetafieldInput::TEXT)
    ->enum(
        [
            'string'
        ]
    )
    ->build();
```

