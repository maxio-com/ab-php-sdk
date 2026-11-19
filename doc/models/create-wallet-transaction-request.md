
# Create Wallet Transaction Request

## Structure

`CreateWalletTransactionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletTransaction` | [`WalletTransaction1`](../../doc/models/wallet-transaction-1.md) | Required | - | getWalletTransaction(): WalletTransaction1 | setWalletTransaction(WalletTransaction1 walletTransaction): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateWalletTransactionRequestBuilder;
use AdvancedBillingLib\Models\Builders\WalletTransaction1Builder;
use AdvancedBillingLib\Models\Kind1;

$createWalletTransactionRequest = CreateWalletTransactionRequestBuilder::init(
    WalletTransaction1Builder::init(
        Kind1::GRANT,
        'String5'
    )
        ->memo('memo6')
        ->expiresAt('expires_at6')
        ->build()
)->build();
```

