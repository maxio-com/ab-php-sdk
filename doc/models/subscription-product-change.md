
# Subscription Product Change

## Structure

`SubscriptionProductChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `previousProductId` | `int` | Required | - | getPreviousProductId(): int | setPreviousProductId(int previousProductId): void |
| `newProductId` | `int` | Required | - | getNewProductId(): int | setNewProductId(int newProductId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionProductChangeBuilder;

$subscriptionProductChange = SubscriptionProductChangeBuilder::init(
    104,
    10
)->build();
```

