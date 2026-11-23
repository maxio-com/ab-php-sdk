
# Feature 2

## Structure

`Feature2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `featureTemplateId` | `int` | Required | The id of the feature template to attach. | getFeatureTemplateId(): int | setFeatureTemplateId(int featureTemplateId): void |
| `value` | `?string` | Optional | The value granted. Defaults to the feature template's `default_value`; required when the template has none. | getValue(): ?string | setValue(?string value): void |
| `periodicityInterval` | `?int` | Optional | Required for `usage_limit` features, unless the feature template has a default periodicity, which is used when omitted. Must be omitted for other kinds. | getPeriodicityInterval(): ?int | setPeriodicityInterval(?int periodicityInterval): void |
| `periodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | Required for `usage_limit` features, unless the feature template has a default periodicity, which is used when omitted. Must be omitted for other kinds. | getPeriodicityUnit(): ?string | setPeriodicityUnit(?string periodicityUnit): void |
| `pricePointType` | [`?string(FeatureOwnerPricePointType)`](../../doc/models/feature-owner-price-point-type.md) | Optional | Set together with `price_point_id` to scope the feature catalog item to a single price point. Omit both to create a product/component-level item, which is a template: it is copied onto price points created afterwards (except bulk-created ones; Clone Component Price Point applies only the items sent with it), but not added to price points that already exist or to their subscribers. | getPricePointType(): ?string | setPricePointType(?string pricePointType): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `propagateToSubscriptions` | `?bool` | Optional | Applies to price-point-scoped items only. When `true`, existing subscriptions on that price point are granted an entitlement for this feature by a background job shortly after, instead of at their next subscription change. When `false` (default) and the price point already has subscribers, the feature is created on a clone of the price point instead, and existing subscribers are unaffected. On a product/component-level item it has no effect, except when the call restores that item's archived price-point copies (creating an item again for a feature template whose item was archived): then `true` grants the feature to those price points' subscribers, and without it the call returns `422` if any of them lack the feature.<br><br>**Default**: `false` | getPropagateToSubscriptions(): ?bool | setPropagateToSubscriptions(?bool propagateToSubscriptions): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Feature2Builder;
use AdvancedBillingLib\Models\EntitlementPeriodicityUnit;
use AdvancedBillingLib\Models\FeatureOwnerPricePointType;

$feature2 = Feature2Builder::init(
    90
)
    ->value('value4')
    ->periodicityInterval(218)
    ->periodicityUnit(EntitlementPeriodicityUnit::HOUR)
    ->pricePointType(FeatureOwnerPricePointType::PRODUCTPRICEPOINT)
    ->pricePointId(22)
    ->propagateToSubscriptions(false)
    ->build();
```

