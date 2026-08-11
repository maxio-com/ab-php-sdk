
# Scheduled Renewal Update Request

## Structure

`ScheduledRenewalUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `renewalConfigurationItem` | [ScheduledRenewalItemRequestBodyComponent](../../doc/models/scheduled-renewal-item-request-body-component.md)\|[ScheduledRenewalItemRequestBodyProduct](../../doc/models/scheduled-renewal-item-request-body-product.md) | Required | This is a container for one-of cases. | getRenewalConfigurationItem(): | setRenewalConfigurationItem( renewalConfigurationItem): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalUpdateRequestBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalItemRequestBodyComponentBuilder;
use AdvancedBillingLib\Models\Builders\ScheduledRenewalComponentCustomPriceBuilder;
use AdvancedBillingLib\Models\PricingScheme;
use AdvancedBillingLib\Models\Builders\PriceBuilder;

$scheduledRenewalUpdateRequest = ScheduledRenewalUpdateRequestBuilder::init(
    ScheduledRenewalItemRequestBodyComponentBuilder::init(
        108
    )
        ->pricePointId(122)
        ->quantity(212)
        ->customPrice(
            ScheduledRenewalComponentCustomPriceBuilder::init(
                PricingScheme::STAIRSTEP,
                [
                    PriceBuilder::init(
                        242,
                        23.26
                    )
                        ->endingQuantity(
                            40
                        )
                        ->build(),
                    PriceBuilder::init(
                        242,
                        23.26
                    )
                        ->endingQuantity(
                            40
                        )
                        ->build()
                ]
            )
                ->taxIncluded(false)
                ->build()
        )
        ->build()
)->build();
```

