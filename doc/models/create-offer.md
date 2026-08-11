
# Create Offer

## Structure

`CreateOffer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `string` | Required | - | getHandle(): string | setHandle(string handle): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `components` | [`?(CreateOfferComponent[])`](../../doc/models/create-offer-component.md) | Optional | - | getComponents(): ?array | setComponents(?array components): void |
| `coupons` | `?(string[])` | Optional | - | getCoupons(): ?array | setCoupons(?array coupons): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOfferBuilder;
use AdvancedBillingLib\Models\Builders\CreateOfferComponentBuilder;

$createOffer = CreateOfferBuilder::init(
    'name6',
    'handle2',
    66
)
    ->description('description6')
    ->productPricePointId(246)
    ->components(
        [
            CreateOfferComponentBuilder::init()
                ->componentId(108)
                ->pricePointId(124)
                ->startingQuantity(84)
                ->build(),
            CreateOfferComponentBuilder::init()
                ->componentId(108)
                ->pricePointId(124)
                ->startingQuantity(84)
                ->build(),
            CreateOfferComponentBuilder::init()
                ->componentId(108)
                ->pricePointId(124)
                ->startingQuantity(84)
                ->build()
        ]
    )
    ->coupons(
        [
            'coupons6',
            'coupons5',
            'coupons4'
        ]
    )
    ->build();
```

