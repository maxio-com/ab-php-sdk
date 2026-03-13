
# Scheduled Renewal Configuration Item

## Structure

`ScheduledRenewalConfigurationItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `subscriptionRenewalConfigurationId` | `?int` | Optional | - | getSubscriptionRenewalConfigurationId(): ?int | setSubscriptionRenewalConfigurationId(?int subscriptionRenewalConfigurationId): void |
| `itemId` | `?int` | Optional | - | getItemId(): ?int | setItemId(?int itemId): void |
| `itemType` | `?string` | Optional | - | getItemType(): ?string | setItemType(?string itemType): void |
| `itemSubclass` | `?string` | Optional | - | getItemSubclass(): ?string | setItemSubclass(?string itemSubclass): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `pricePointType` | `?string` | Optional | - | getPricePointType(): ?string | setPricePointType(?string pricePointType): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `decimalQuantity` | `?string` | Optional | - | getDecimalQuantity(): ?string | setDecimalQuantity(?string decimalQuantity): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example (as JSON)

```json
{
  "id": 146,
  "subscription_id": 0,
  "subscription_renewal_configuration_id": 156,
  "item_id": 38,
  "item_type": "item_type4"
}
```

