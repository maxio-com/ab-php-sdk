
# Update Metafield

## Structure

`UpdateMetafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentName` | `?string` | Optional | - | getCurrentName(): ?string | setCurrentName(?string currentName): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `inputType` | [`?string(MetafieldInput)`](../../doc/models/metafield-input.md) | Optional | Indicates the type of metafield. A text metafield allows any string value. Dropdown and radio metafields have a set of values that can be selected. Defaults to 'text'. | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | `?(string[])` | Optional | Only applicable when input_type is radio or dropdown. | getEnum(): ?array | setEnum(?array enum): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateMetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$updateMetafield = UpdateMetafieldBuilder::init()
    ->currentName('current_name6')
    ->name('name2')
    ->scope(
        MetafieldScopeBuilder::init()
            ->csv(IncludeOption::EXCLUDE)
            ->invoices(IncludeOption::EXCLUDE)
            ->statements(IncludeOption::EXCLUDE)
            ->portal(IncludeOption::EXCLUDE)
            ->publicShow(IncludeOption::EXCLUDE)
            ->build()
    )
    ->inputType(MetafieldInput::RADIO)
    ->enum(
        [
            'enum8',
            'enum9',
            'enum0'
        ]
    )
    ->build();
```

