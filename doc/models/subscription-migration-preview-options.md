
# Subscription Migration Preview Options

## Structure

`SubscriptionMigrationPreviewOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?int` | Optional | The ID of the target Product. Either a product_id or product_handle must be present. A Subscription can be migrated to another product for both the current Product Family and another Product Family. Note: Going to another Product Family, components will not be migrated as well. | getProductId(): ?int | setProductId(?int productId): void |
| `productPricePointId` | `?int` | Optional | The ID of the specified product's price point. This can be passed to migrate to a non-default price point. | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `includeTrial` | `?bool` | Optional | Whether to include the trial period configured for the product price point when starting a new billing period. Note that if preserve_period is set, then include_trial will be ignored.<br>**Default**: `false` | getIncludeTrial(): ?bool | setIncludeTrial(?bool includeTrial): void |
| `includeInitialCharge` | `?bool` | Optional | If `true` is sent initial charges will be assessed.<br>**Default**: `false` | getIncludeInitialCharge(): ?bool | setIncludeInitialCharge(?bool includeInitialCharge): void |
| `includeCoupons` | `?bool` | Optional | If `true` is sent, any coupons associated with the subscription will be applied to the migration. If `false` is sent, coupons will not be applied. Note: When migrating to a new product family, the coupon cannot migrate.<br>**Default**: `true` | getIncludeCoupons(): ?bool | setIncludeCoupons(?bool includeCoupons): void |
| `preservePeriod` | `?bool` | Optional | If `false` is sent, the subscription's billing period will be reset to today and the full price of the new product will be charged. If `true` is sent, the billing period will not change and a prorated charge will be issued for the new product.<br>**Default**: `false` | getPreservePeriod(): ?bool | setPreservePeriod(?bool preservePeriod): void |
| `productHandle` | `?string` | Optional | The handle of the target Product. Either a product_id or product_handle must be present. A Subscription can be migrated to another product for both the current Product Family and another Product Family. Note: Going to another Product Family, components will not be migrated as well. | getProductHandle(): ?string | setProductHandle(?string productHandle): void |
| `productPricePointHandle` | `?string` | Optional | The ID or handle of the specified product's price point. This can be passed to migrate to a non-default price point. | getProductPricePointHandle(): ?string | setProductPricePointHandle(?string productPricePointHandle): void |
| `proration` | [`?Proration`](../../doc/models/proration.md) | Optional | - | getProration(): ?Proration | setProration(?Proration proration): void |
| `prorationDate` | `?string` | Optional | The date that the proration is calculated from for the preview | getProrationDate(): ?string | setProrationDate(?string prorationDate): void |

## Example (as JSON)

```json
{
  "include_trial": false,
  "include_initial_charge": false,
  "include_coupons": true,
  "preserve_period": false,
  "product_id": 242,
  "product_price_point_id": 166
}
```

