
# Feature Catalog Item

A feature template attached to a specific product or component (or one of their price points), with a concrete value. When a subscriber signs up for or is assigned this product/component, the feature catalog item is provisioned as an entitlement on their subscription.

## Structure

`FeatureCatalogItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `featureTemplateId` | `?int` | Optional | The id of the feature template this item was created from. | getFeatureTemplateId(): ?int | setFeatureTemplateId(?int featureTemplateId): void |
| `featureKey` | `?string` | Optional | The `key` of the parent feature template. | getFeatureKey(): ?string | setFeatureKey(?string featureKey): void |
| `featureName` | `?string` | Optional | The `name` of the parent feature template. | getFeatureName(): ?string | setFeatureName(?string featureName): void |
| `featureKind` | [`?string(FeatureKind)`](../../doc/models/feature-kind.md) | Optional | The behavior of a feature:<br><br>- `access_right`: a boolean entitlement. A subscriber either has access or does not.<br>- `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API calls per month").<br>- `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a metered limit. | getFeatureKind(): ?string | setFeatureKind(?string featureKind): void |
| `value` | `?string` | Optional | The value granted by this feature catalog item. Interpreted according to `feature_kind`: `"true"`/`"false"` for `access_right`, a numeric string for `usage_limit`, or any string for `service_right` (shaped by the feature template's `value_type`). | getValue(): ?string | setValue(?string value): void |
| `periodicityInterval` | `?int` | Optional | Set when `feature_kind` is `usage_limit`; `null` otherwise. | getPeriodicityInterval(): ?int | setPeriodicityInterval(?int periodicityInterval): void |
| `periodicityUnit` | [`?string(EntitlementPeriodicityUnit)`](../../doc/models/entitlement-periodicity-unit.md) | Optional | Set when `feature_kind` is `usage_limit`; `null` otherwise. | getPeriodicityUnit(): ?string | setPeriodicityUnit(?string periodicityUnit): void |
| `pricePointType` | [`?string(FeatureOwnerPricePointType)`](../../doc/models/feature-owner-price-point-type.md) | Optional | `null` when this feature catalog item applies to every price point of its owning product/component. Set when the feature catalog item is an override for one specific price point. | getPricePointType(): ?string | setPricePointType(?string pricePointType): void |
| `pricePointId` | `?int` | Optional | Set together with `price_point_type` for price-point-specific overrides. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `archivedAt` | `?DateTime` | Optional | - | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\FeatureCatalogItemBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$featureCatalogItem = FeatureCatalogItemBuilder::init()
    ->id(52)
    ->featureTemplateId(42)
    ->featureKey('feature_key6')
    ->featureName('feature_name0')
    ->featureKind(FeatureKind::USAGE_LIMIT)
    ->build();
```

