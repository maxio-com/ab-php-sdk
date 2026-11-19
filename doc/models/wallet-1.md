
# Wallet 1

## Structure

`Wallet1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `int` | Required | The subscription that will own the wallet. | getSubscriptionId(): int | setSubscriptionId(int subscriptionId): void |
| `walletProductId` | int\|string | Required | This is a container for one-of cases. | getWalletProductId(): | setWalletProductId( walletProductId): void |
| `name` | `?string` | Optional | (Optional) A merchant-facing label for the wallet. Surrounding spaces are stripped; a blank value is stored as `null`.<br><br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |
| `depletionPolicy` | `?string` | Optional | Defaults to `hard_stop`, currently the only supported value. | getDepletionPolicy(): ?string | setDepletionPolicy(?string depletionPolicy): void |
| `hardStopOverflow` | [`?string(WalletHardStopOverflow)`](../../doc/models/wallet-hard-stop-overflow.md) | Optional | Defaults to `discard`. | getHardStopOverflow(): ?string | setHardStopOverflow(?string hardStopOverflow): void |
| `meterId` | `?int` | Optional | Pairs the wallet with a merchant-owned metering meter, so its balance factors in live usage (see the wallet resource's `meter` and `metered_through_at` fields). Only a `sum` or `count` meter can be paired. Requires metered wallet consumption to be enabled for the site, checked whenever this or `conversion_rate` is sent: `403` (plain text, not JSON) if it isn't. A meter id that doesn't resolve to a merchant-owned meter on this site, including a system-maintained shadow meter, is `404`. Immutable once the wallet is created. | getMeterId(): ?int | setMeterId(?int meterId): void |
| `conversionRate` | string\|int\|null | Optional | This is a container for one-of cases. | getConversionRate(): | setConversionRate( conversionRate): void |
| `pricePointId` | `?int` | Optional | The price point used to price [Create Wallet Purchase](../../doc/controllers/wallet-purchases.md#create-wallet-purchase) calls against this wallet. Must belong to the Wallet Product, and can't be archived or a subscription-specific custom price point. Defaults to the Wallet Product's default price point. Immutable once the wallet is created. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `initialBalance` | string\|int\|null | Optional | This is a container for one-of cases. | getInitialBalance(): | setInitialBalance( initialBalance): void |
| `initialBalanceExpiresAt` | `?string` | Optional | An expiration for the initial-balance grant. Only accepted together with a non-zero `initial_balance`, and must be in the future. Accepts either a bare calendar date (`YYYY-MM-DD`), resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day that doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next month. | getInitialBalanceExpiresAt(): ?string | setInitialBalanceExpiresAt(?string initialBalanceExpiresAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Wallet1Builder;
use AdvancedBillingLib\Models\WalletHardStopOverflow;

$wallet1 = Wallet1Builder::init(
    66,
    126
)
    ->name('name6')
    ->depletionPolicy('depletion_policy4')
    ->hardStopOverflow(WalletHardStopOverflow::DISCARD)
    ->meterId(82)
    ->conversionRate(
        'String9'
    )
    ->initialBalance(
        'String1'
    )
    ->build();
```

