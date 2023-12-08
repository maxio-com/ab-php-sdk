
# Sale Rep

## Structure

`SaleRep`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `fullName` | `?string` | Optional | - | getFullName(): ?string | setFullName(?string fullName): void |
| `subscriptionsCount` | `?int` | Optional | - | getSubscriptionsCount(): ?int | setSubscriptionsCount(?int subscriptionsCount): void |
| `testMode` | `?bool` | Optional | - | getTestMode(): ?bool | setTestMode(?bool testMode): void |
| `subscriptions` | [`?(SaleRepSubscription[])`](../../doc/models/sale-rep-subscription.md) | Optional | - | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |

## Example (as JSON)

```json
{
  "id": 18,
  "full_name": "full_name0",
  "subscriptions_count": 162,
  "test_mode": false,
  "subscriptions": [
    {
      "id": 202,
      "site_name": "site_name8",
      "subscription_url": "subscription_url2",
      "customer_name": "customer_name8",
      "created_at": "created_at4"
    },
    {
      "id": 202,
      "site_name": "site_name8",
      "subscription_url": "subscription_url2",
      "customer_name": "customer_name8",
      "created_at": "created_at4"
    }
  ]
}
```

