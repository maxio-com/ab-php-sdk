
# Aggregated Entitlement

One entitlement in a subscriber's aggregated entitlements list. Entries are aggregated per feature key and periodicity window, not per feature key alone. A `usage_limit` feature granted with two different periodicities yields two entries sharing one `feature_key`. Use `periodicity_key` to identify an entry uniquely.

## Structure

`AggregatedEntitlement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `featureKey` | `?string` | Optional | The feature's key, prefixed by kind: `feature.*` for `access_right`, `usage.*` for `usage_limit`, `service.*` for `service_right`. | getFeatureKey(): ?string | setFeatureKey(?string featureKey): void |
| `periodicityKey` | `?string` | Optional | Uniquely identifies this aggregated entry: the prefixed feature key, suffixed with `:{interval}:{unit}` when the entitlement has a periodicity window. Equal to `feature_key` when `periodicity` is `null`. | getPeriodicityKey(): ?string | setPeriodicityKey(?string periodicityKey): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `type` | [`?string(FeatureKind)`](../../doc/models/feature-kind.md) | Optional | The behavior of a feature:<br><br>- `access_right`: a boolean entitlement. A subscriber either has access or does not.<br>- `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API calls per month").<br>- `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a metered limit. | getType(): ?string | setType(?string type): void |
| `value` | bool\|float\|string\|null | Optional | This is a container for one-of cases. | getValue(): | setValue( value): void |
| `enabled` | `?bool` | Optional | `true` only when the aggregated value is truthy for this feature's kind, and the subscription is in a live state (`active`, `trialing`, `assessing`, `past_due`, or `soft_failure`). `false` otherwise, including for `awaiting_signup`, canceled, expired, and on-hold subscriptions. Entitlements deliberately stay enabled through dunning. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `periodicity` | [`?AggregatedEntitlementPeriodicity`](../../doc/models/aggregated-entitlement-periodicity.md) | Optional | - | getPeriodicity(): ?AggregatedEntitlementPeriodicity | setPeriodicity(?AggregatedEntitlementPeriodicity periodicity): void |
| `sourceProducts` | `?(string[])` | Optional | The names of the products/components contributing to this entitlement. For `access_right` features, only contributors that granted `true` are listed. | getSourceProducts(): ?array | setSourceProducts(?array sourceProducts): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AggregatedEntitlementBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$aggregatedEntitlement = AggregatedEntitlementBuilder::init()
    ->featureKey('feature.sso')
    ->periodicityKey('usage.api_calls:1:month')
    ->name('name2')
    ->type(FeatureKind::ACCESS_RIGHT)
    ->value(
        true
    )
    ->build();
```

