
# Invoice Line Item Pricing Detail

## Structure

`InvoiceLineItemPricingDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceLineItemPricingDetailBuilder;

$invoiceLineItemPricingDetail = InvoiceLineItemPricingDetailBuilder::init()
    ->label('label4')
    ->amount('amount6')
    ->build();
```

