
# Create Wallet Adjustment Request

A signed correction to a specific grant's balance, or to an overdraft entry's usage, intended for support and ops use.

## Structure

`CreateWalletAdjustmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `adjustment` | [`Adjustment`](../../doc/models/adjustment.md) | Required | - | getAdjustment(): Adjustment | setAdjustment(Adjustment adjustment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateWalletAdjustmentRequestBuilder;
use AdvancedBillingLib\Models\Builders\AdjustmentBuilder;

$createWalletAdjustmentRequest = CreateWalletAdjustmentRequestBuilder::init(
    AdjustmentBuilder::init(
        'String7',
        'reason0'
    )
        ->grantId(104)
        ->sourceTransactionId(126)
        ->expectedRemaining('expected_remaining6')
        ->expectedSourceCorrections('expected_source_corrections8')
        ->build()
)->build();
```

