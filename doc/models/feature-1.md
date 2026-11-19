
# Feature 1

`key` cannot be changed once set. `kind` cannot be changed once any feature catalog item has been created from this template.

## Structure

`Feature1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `unit` | `?string` | Optional | - | getUnit(): ?string | setUnit(?string unit): void |
| `valueType` | [`?string(FeatureValueType)`](../../doc/models/feature-value-type.md) | Optional | The data type of a feature's value. For `access_right` features this is always `boolean`, and for `usage_limit` features this is always `numeric`. For `service_right` features, you choose the value type explicitly. | getValueType(): ?string | setValueType(?string valueType): void |
| `defaultValue` | `?string` | Optional | - | getDefaultValue(): ?string | setDefaultValue(?string defaultValue): void |
| `defaultPeriodicityInterval` | `?int` | Optional | - | getDefaultPeriodicityInterval(): ?int | setDefaultPeriodicityInterval(?int defaultPeriodicityInterval): void |
| `defaultPeriodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | - | getDefaultPeriodicityUnit(): ?string | setDefaultPeriodicityUnit(?string defaultPeriodicityUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Feature1Builder;
use AdvancedBillingLib\Models\FeatureValueType;

$feature1 = Feature1Builder::init()
    ->name('name8')
    ->description('description8')
    ->unit('unit6')
    ->valueType(FeatureValueType::TEXT)
    ->defaultValue('default_value8')
    ->build();
```

