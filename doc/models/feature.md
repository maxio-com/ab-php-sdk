
# Feature

## Structure

`Feature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `string` | Required | A unique, lowercase, underscore-separated identifier for the feature. Immutable once set. | getKey(): string | setKey(string key): void |
| `name` | `string` | Required | The display name of the feature. | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `kind` | [`string(FeatureKind)`](../../doc/models/feature-kind.md) | Required | The behavior of a feature:<br><br>- `access_right`: a boolean entitlement. A subscriber either has access or does not.<br>- `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API calls per month").<br>- `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a metered limit. | getKind(): string | setKind(string kind): void |
| `unit` | `?string` | Optional | Required when `kind` is `usage_limit`. | getUnit(): ?string | setUnit(?string unit): void |
| `valueType` | [`?string(FeatureValueType)`](../../doc/models/feature-value-type.md) | Optional | Required when `kind` is `service_right`. Ignored for other kinds, where it is inferred automatically. | getValueType(): ?string | setValueType(?string valueType): void |
| `defaultValue` | `?string` | Optional | - | getDefaultValue(): ?string | setDefaultValue(?string defaultValue): void |
| `defaultPeriodicityInterval` | `?int` | Optional | Only valid when `kind` is `usage_limit`. | getDefaultPeriodicityInterval(): ?int | setDefaultPeriodicityInterval(?int defaultPeriodicityInterval): void |
| `defaultPeriodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | Only valid when `kind` is `usage_limit`. Must be set together with `default_periodicity_interval`. | getDefaultPeriodicityUnit(): ?string | setDefaultPeriodicityUnit(?string defaultPeriodicityUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureBuilder;
use AdvancedBillingLib\Models\FeatureKind;
use AdvancedBillingLib\Models\FeatureValueType;

$feature = FeatureBuilder::init(
    'sso',
    'name4',
    FeatureKind::USAGE_LIMIT
)
    ->description('description4')
    ->unit('unit2')
    ->valueType(FeatureValueType::BOOLEAN)
    ->defaultValue('default_value4')
    ->defaultPeriodicityInterval(150)
    ->build();
```

