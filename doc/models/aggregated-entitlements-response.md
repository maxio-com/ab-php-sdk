
# Aggregated Entitlements Response

## Structure

`AggregatedEntitlementsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | - | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `customerId` | `int` | Required | - | getCustomerId(): int | setCustomerId(int customerId): void |
| `status` | `string` | Required | The subscription's current state, e.g. `active`, `trialing`, `canceled`. | getStatus(): string | setStatus(string status): void |
| `entitlements` | [`AggregatedEntitlement[]`](../../doc/models/aggregated-entitlement.md) | Required | - | getEntitlements(): array | setEntitlements(array entitlements): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AggregatedEntitlementsResponseBuilder;
use AdvancedBillingLib\Models\Builders\AggregatedEntitlementBuilder;
use AdvancedBillingLib\Models\FeatureKind;

$aggregatedEntitlementsResponse = AggregatedEntitlementsResponseBuilder::init(
    114,
    42,
    'status6',
    [
        AggregatedEntitlementBuilder::init()
            ->featureKey('feature.sso')
            ->periodicityKey('usage.api_calls:1:month')
            ->name('name6')
            ->type(FeatureKind::SERVICE_RIGHT)
            ->value(
                true
            )
            ->build()
    ]
)->build();
```

