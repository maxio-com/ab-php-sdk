
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

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalConfigurationItemBuilder;

$scheduledRenewalConfigurationItem = ScheduledRenewalConfigurationItemBuilder::init()
    ->id(54)
    ->subscriptionId(164)
    ->subscriptionRenewalConfigurationId(64)
    ->itemId(202)
    ->itemType('item_type0')
    ->build();
```

