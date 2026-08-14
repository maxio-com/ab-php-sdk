
# Subscription Product Change

Event data for both `subscription_product_change` and `subscription_product_change_scheduled`. The price point and `effective_at` fields are only populated for scheduled changes.

## Structure

`SubscriptionProductChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousProductId` | `int` | Required | - | getPreviousProductId(): int | setPreviousProductId(int previousProductId): void |
| `newProductId` | `int` | Required | - | getNewProductId(): int | setNewProductId(int newProductId): void |
| `previousProductPricePointId` | `?int` | Optional | - | getPreviousProductPricePointId(): ?int | setPreviousProductPricePointId(?int previousProductPricePointId): void |
| `newProductPricePointId` | `?int` | Optional | - | getNewProductPricePointId(): ?int | setNewProductPricePointId(?int newProductPricePointId): void |
| `effectiveAt` | `?DateTime` | Optional | When the scheduled product change takes effect (the subscription's next renewal). Only sent for `subscription_product_change_scheduled`. | getEffectiveAt(): ?\DateTime | setEffectiveAt(?\DateTime effectiveAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionProductChangeBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$subscriptionProductChange = SubscriptionProductChangeBuilder::init(
    104,
    10
)
    ->previousProductPricePointId(228)
    ->newProductPricePointId(222)
    ->effectiveAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

