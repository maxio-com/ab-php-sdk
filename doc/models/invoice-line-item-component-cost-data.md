
# Invoice Line Item Component Cost Data

## Structure

`InvoiceLineItemComponentCostData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rates` | [`?(ComponentCostData[])`](../../doc/models/component-cost-data.md) | Optional | - | getRates(): ?array | setRates(?array rates): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceLineItemComponentCostDataBuilder;
use AdvancedBillingLib\Models\Builders\ComponentCostDataBuilder;

$invoiceLineItemComponentCostData = InvoiceLineItemComponentCostDataBuilder::init()
    ->rates(
        [
            ComponentCostDataBuilder::init()
                ->componentCodeId(116)
                ->pricePointId(226)
                ->productId(94)
                ->quantity('quantity0')
                ->amount('amount6')
                ->build(),
            ComponentCostDataBuilder::init()
                ->componentCodeId(116)
                ->pricePointId(226)
                ->productId(94)
                ->quantity('quantity0')
                ->amount('amount6')
                ->build()
        ]
    )
    ->build();
```

