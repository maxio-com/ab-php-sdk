
# List Offers Response

## Structure

`ListOffersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `offers` | [`?(Offer[])`](../../doc/models/offer.md) | Optional | - | getOffers(): ?array | setOffers(?array offers): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListOffersResponseBuilder;
use AdvancedBillingLib\Models\Builders\OfferBuilder;

$listOffersResponse = ListOffersResponseBuilder::init()
    ->offers(
        [
            OfferBuilder::init()
                ->id(12)
                ->siteId(194)
                ->productFamilyId(16)
                ->productId(210)
                ->productPricePointId(134)
                ->build()
        ]
    )
    ->build();
```

