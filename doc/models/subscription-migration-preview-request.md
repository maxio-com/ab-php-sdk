
# Subscription Migration Preview Request

## Structure

`SubscriptionMigrationPreviewRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `migration` | [`SubscriptionMigrationPreviewOptions`](../../doc/models/subscription-migration-preview-options.md) | Required | - | getMigration(): SubscriptionMigrationPreviewOptions | setMigration(SubscriptionMigrationPreviewOptions migration): void |

## Example (as JSON)

```json
{
  "migration": {
    "include_trial": false,
    "include_initial_charge": false,
    "include_coupons": true,
    "preserve_period": false,
    "product_id": 158,
    "product_price_point_id": 82
  }
}
```

