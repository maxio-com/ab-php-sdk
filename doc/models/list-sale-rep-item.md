
# List Sale Rep Item

## Structure

`ListSaleRepItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `fullName` | `?string` | Optional | - | getFullName(): ?string | setFullName(?string fullName): void |
| `subscriptionsCount` | `?int` | Optional | - | getSubscriptionsCount(): ?int | setSubscriptionsCount(?int subscriptionsCount): void |
| `mrrData` | [`?array<string,SaleRepItemMrr>`](../../doc/models/sale-rep-item-mrr.md) | Optional | - | getMrrData(): ?array | setMrrData(?array mrrData): void |
| `testMode` | `?bool` | Optional | - | getTestMode(): ?bool | setTestMode(?bool testMode): void |

## Example (as JSON)

```json
{
  "mrr_data": {
    "november_2019": {
      "mrr": "$0.00",
      "usage": "$0.00",
      "recurring": "$0.00"
    },
    "december_2019": {
      "mrr": "$0.00",
      "usage": "$0.00",
      "recurring": "$0.00"
    },
    "january_2020": {
      "mrr": "$400.00",
      "usage": "$0.00",
      "recurring": "$400.00"
    }
  },
  "id": 26,
  "full_name": "full_name8",
  "subscriptions_count": 154,
  "test_mode": false
}
```

