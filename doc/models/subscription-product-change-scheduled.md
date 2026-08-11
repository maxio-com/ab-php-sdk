
# Subscription Product Change Scheduled

## Structure

`SubscriptionProductChangeScheduled`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousProductId` | `int` | Required | - | getPreviousProductId(): int | setPreviousProductId(int previousProductId): void |
| `newProductId` | `int` | Required | - | getNewProductId(): int | setNewProductId(int newProductId): void |
| `previousProductPricePointId` | `?int` | Optional | - | getPreviousProductPricePointId(): ?int | setPreviousProductPricePointId(?int previousProductPricePointId): void |
| `newProductPricePointId` | `?int` | Optional | - | getNewProductPricePointId(): ?int | setNewProductPricePointId(?int newProductPricePointId): void |
| `effectiveAt` | `?DateTime` | Optional | When the scheduled product change takes effect (the subscription's next renewal). | getEffectiveAt(): ?\DateTime | setEffectiveAt(?\DateTime effectiveAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionProductChangeScheduledBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$subscriptionProductChangeScheduled = SubscriptionProductChangeScheduledBuilder::init(
    26,
    88
)
    ->previousProductPricePointId(150)
    ->newProductPricePointId(144)
    ->effectiveAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

