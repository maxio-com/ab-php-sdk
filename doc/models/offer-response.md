
# Offer Response

## Structure

`OfferResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `offer` | [`?Offer`](../../doc/models/offer.md) | Optional | - | getOffer(): ?Offer | setOffer(?Offer offer): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OfferResponseBuilder;
use AdvancedBillingLib\Models\Builders\OfferBuilder;

$offerResponse = OfferResponseBuilder::init()
    ->offer(
        OfferBuilder::init()
            ->id(28)
            ->siteId(210)
            ->productFamilyId(224)
            ->productId(30)
            ->productPricePointId(150)
            ->build()
    )
    ->build();
```

