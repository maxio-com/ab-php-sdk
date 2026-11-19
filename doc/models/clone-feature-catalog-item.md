
# Clone Feature Catalog Item

A feature to put on the cloned price point. Requires Entitlements to be enabled for the site; ignored otherwise.

Unlike Create Feature Catalog Item, nothing falls back to the feature template's defaults: send `value`, and for a `usage_limit` feature its periodicity (and any grant expiration) explicitly. If any item can't be applied, for example a missing `value`, a `usage_limit` item without periodicity, or an archived or unknown feature template, the whole clone fails with `422` and nothing is created.

## Structure

`CloneFeatureCatalogItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `featureTemplateId` | `int` | Required | - | getFeatureTemplateId(): int | setFeatureTemplateId(int featureTemplateId): void |
| `value` | `string` | Required | - | getValue(): string | setValue(string value): void |
| `periodicityInterval` | `?int` | Optional | Required for `usage_limit` features; must be omitted for other kinds. | getPeriodicityInterval(): ?int | setPeriodicityInterval(?int periodicityInterval): void |
| `periodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | Required for `usage_limit` features; must be omitted for other kinds. | getPeriodicityUnit(): ?string | setPeriodicityUnit(?string periodicityUnit): void |
| `grantExpirationInterval` | `?int` | Optional | `usage_limit` features only. A positive number of `grant_expiration_unit`s; required with `day` or `month`, and must be omitted with `until_next_refill`. | getGrantExpirationInterval(): ?int | setGrantExpirationInterval(?int grantExpirationInterval): void |
| `grantExpirationUnit` | [`?string(GrantExpirationUnit)`](../../doc/models/grant-expiration-unit.md) | Optional | `usage_limit` features only. | getGrantExpirationUnit(): ?string | setGrantExpirationUnit(?string grantExpirationUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CloneFeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;
use AdvancedBillingLib\Models\GrantExpirationUnit;

$cloneFeatureCatalogItem = CloneFeatureCatalogItemBuilder::init(
    212,
    'value6'
)
    ->periodicityInterval(84)
    ->periodicityUnit(EntitlementPeriodicityUnit::WEEK)
    ->grantExpirationInterval(8)
    ->grantExpirationUnit(GrantExpirationUnit::UNTIL_NEXT_REFILL)
    ->build();
```

