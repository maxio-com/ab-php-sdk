
# MRR Response

## Structure

`MRRResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mrr` | [`MRR`](../../doc/models/mrr.md) | Required | - | getMrr(): MRR | setMrr(MRR mrr): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\MRRResponseBuilder;
use AdvancedBillingLib\Models\Builders\MRRBuilder;
use AdvancedBillingLib\Models\Builders\BreakoutsBuilder;

$mRRResponse = MRRResponseBuilder::init(
    MRRBuilder::init()
        ->amountInCents(198)
        ->amountFormatted('amount_formatted6')
        ->currency('currency4')
        ->currencySymbol('currency_symbol2')
        ->breakouts(
            BreakoutsBuilder::init()
                ->planAmountInCents(254)
                ->planAmountFormatted('plan_amount_formatted0')
                ->usageAmountInCents(106)
                ->usageAmountFormatted('usage_amount_formatted8')
                ->build()
        )
        ->build()
)->build();
```

