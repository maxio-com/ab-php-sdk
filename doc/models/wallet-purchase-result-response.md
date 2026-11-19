
# Wallet Purchase Result Response

## Structure

`WalletPurchaseResultResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletPurchases` | [`WalletPurchase[]`](../../doc/models/wallet-purchase.md) | Required | - | getWalletPurchases(): array | setWalletPurchases(array walletPurchases): void |
| `balance` | `string` | Required | The wallet's new balance, as a decimal string. | getBalance(): string | setBalance(string balance): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletPurchaseResultResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletPurchaseBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$walletPurchaseResultResponse = WalletPurchaseResultResponseBuilder::init(
    [
        WalletPurchaseBuilder::init(
            244,
            134,
            'invoice_uid0',
            'quantity6'
        )
            ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    ],
    'balance6'
)->build();
```

