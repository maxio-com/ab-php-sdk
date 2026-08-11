
# Metafield

## Structure

`Metafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `dataCount` | `?int` | Optional | The amount of subscriptions this metafield has been applied to in Advanced Billing. | getDataCount(): ?int | setDataCount(?int dataCount): void |
| `inputType` | [`?string(MetafieldInput)`](../../doc/models/metafield-input.md) | Optional | Indicates the type of metafield. A text metafield allows any string value. Dropdown and radio metafields have a set of values that can be selected. Defaults to 'text'. | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | string\|string[]\|null | Optional | This is a container for one-of cases. | getEnum(): | setEnum( enum): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$metafield = MetafieldBuilder::init()
    ->id(242)
    ->name('name4')
    ->scope(
        MetafieldScopeBuilder::init()
            ->csv(IncludeOption::EXCLUDE)
            ->invoices(IncludeOption::EXCLUDE)
            ->statements(IncludeOption::EXCLUDE)
            ->portal(IncludeOption::EXCLUDE)
            ->publicShow(IncludeOption::EXCLUDE)
            ->build()
    )
    ->dataCount(26)
    ->inputType(MetafieldInput::BALANCE_TRACKER)
    ->build();
```

