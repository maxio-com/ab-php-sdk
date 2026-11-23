
# Wallet Grant Result Response

Returned by an adjustment: the ledger row written, plus the wallet's new balance.

## Structure

`WalletGrantResultResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletTransactions` | [`WalletTransaction[]`](../../doc/models/wallet-transaction.md) | Required | - | getWalletTransactions(): array | setWalletTransactions(array walletTransactions): void |
| `balance` | `string` | Required | The wallet's new balance, as a decimal string. | getBalance(): string | setBalance(string balance): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletGrantResultResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletTransactionBuilder;

$walletGrantResultResponse = WalletGrantResultResponseBuilder::init(
    [
        WalletTransactionBuilder::init()
            ->id(140)
            ->walletId(244)
            ->kind('grant')
            ->amount('-30.0')
            ->grantId(160)
            ->build()
    ],
    'balance8'
)->build();
```

