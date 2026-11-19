
# Wallet Purchase Preview Response

## Structure

`WalletPurchasePreviewResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletPurchasePreviews` | [`WalletPurchasePreview[]`](../../doc/models/wallet-purchase-preview.md) | Required | - | getWalletPurchasePreviews(): array | setWalletPurchasePreviews(array walletPurchasePreviews): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletPurchasePreviewResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletPurchasePreviewBuilder;

$walletPurchasePreviewResponse = WalletPurchasePreviewResponseBuilder::init(
    [
        WalletPurchasePreviewBuilder::init(
            126,
            'USD',
            'quantity6',
            'amount2'
        )->build()
    ]
)->build();
```

