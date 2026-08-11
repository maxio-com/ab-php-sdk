
# Coupon Restriction

## Structure

`CouponRestriction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `itemType` | [`?string(RestrictionType)`](../../doc/models/restriction-type.md) | Optional | - | getItemType(): ?string | setItemType(?string itemType): void |
| `itemId` | `?int` | Optional | - | getItemId(): ?int | setItemId(?int itemId): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CouponRestrictionBuilder;
use AdvancedBillingLib\Models\RestrictionType;

$couponRestriction = CouponRestrictionBuilder::init()
    ->id(66)
    ->itemType(RestrictionType::COMPONENT)
    ->itemId(214)
    ->name('name0')
    ->handle('handle6')
    ->build();
```

