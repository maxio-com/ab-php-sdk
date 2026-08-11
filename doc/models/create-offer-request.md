
# Create Offer Request

## Structure

`CreateOfferRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `offer` | [`CreateOffer`](../../doc/models/create-offer.md) | Required | - | getOffer(): CreateOffer | setOffer(CreateOffer offer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOfferRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateOfferBuilder;
use AdvancedBillingLib\Models\Builders\CreateOfferComponentBuilder;

$createOfferRequest = CreateOfferRequestBuilder::init(
    CreateOfferBuilder::init(
        'name4',
        'handle0',
        30
    )
        ->description('description6')
        ->productPricePointId(150)
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
                    ->build()
            ]
        )
        ->coupons(
            [
                'coupons6'
            ]
        )
        ->build()
)->build();
```

