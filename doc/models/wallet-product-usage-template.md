
# Wallet Product Usage Template

One wallet template billing through this Wallet Product, joined to the Feature and plan/component that assigns it, when there is one.

## Structure

`WalletProductUsageTemplate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planName` | `?string` | Optional | The name of the product or component the Feature is assigned to. `null` when the wallet template has no assigning Feature. | getPlanName(): ?string | setPlanName(?string planName): void |
| `walletTemplateName` | `?string` | Optional | The label set in `wallet_behavior.name` on the Feature, or the standalone wallet's own `name`. | getWalletTemplateName(): ?string | setWalletTemplateName(?string walletTemplateName): void |
| `unitName` | `?string` | Optional | - | getUnitName(): ?string | setUnitName(?string unitName): void |
| `purchaseMechanism` | `?string` | Optional | A best-effort label for how this wallet is expected to be replenished. Currently reports `"Overage"` when the wallet template allows a negative balance, and `null` otherwise; there's no persisted field yet distinguishing, for example, an intended "Auto top-up" from "Purchase more" setup. Treat this as informational, not a stable enum. | getPurchaseMechanism(): ?string | setPurchaseMechanism(?string purchaseMechanism): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `active` | `?bool` | Optional | `false` when the assigning Feature is archived. | getActive(): ?bool | setActive(?bool active): void |
| `featureTemplateId` | `?int` | Optional | - | getFeatureTemplateId(): ?int | setFeatureTemplateId(?int featureTemplateId): void |
| `featureTemplateName` | `?string` | Optional | - | getFeatureTemplateName(): ?string | setFeatureTemplateName(?string featureTemplateName): void |
| `pricePointOverride` | `?bool` | Optional | `true` when this wallet template is priced at a price point other than the Wallet Product's default. | getPricePointOverride(): ?bool | setPricePointOverride(?bool pricePointOverride): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductUsageTemplateBuilder;

$walletProductUsageTemplate = WalletProductUsageTemplateBuilder::init()
    ->planName('plan_name0')
    ->walletTemplateName('wallet_template_name8')
    ->unitName('unit_name0')
    ->purchaseMechanism('purchase_mechanism8')
    ->pricePointName('price_point_name8')
    ->build();
```

