
# MRR Movement

## Structure

`MRRMovement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `category` | `?string` | Optional | - | getCategory(): ?string | setCategory(?string category): void |
| `subscriberDelta` | `?int` | Optional | - | getSubscriberDelta(): ?int | setSubscriberDelta(?int subscriberDelta): void |
| `leadDelta` | `?int` | Optional | - | getLeadDelta(): ?int | setLeadDelta(?int leadDelta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MRRMovementBuilder;

$mRRMovement = MRRMovementBuilder::init()
    ->amount(116)
    ->category('category4')
    ->subscriberDelta(100)
    ->leadDelta(128)
    ->build();
```

