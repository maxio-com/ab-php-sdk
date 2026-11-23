
# Wallet

A balance, denominated in the unit of a Wallet Product, owned by a subscription. Grants and recurring funding schedules are embedded so a single read shows the full balance breakdown.

## Structure

`Wallet`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Advanced Billing id of the wallet. | getId(): ?int | setId(?int id): void |
| `ownerType` | [`?string(OwnerType)`](../../doc/models/owner-type.md) | Optional | The polymorphic owner type. `subscription` is the only value currently supported. | getOwnerType(): ?string | setOwnerType(?string ownerType): void |
| `ownerId` | `?int` | Optional | The id of the owning subscription. | getOwnerId(): ?int | setOwnerId(?int ownerId): void |
| `name` | `?string` | Optional | (Optional) A merchant-facing label for the wallet, set on create and changeable with [Update Wallet](../../doc/controllers/wallets.md#update-wallet). Surrounding spaces are stripped; a blank value is stored as `null`. | getName(): ?string | setName(?string name): void |
| `walletProductId` | `?int` | Optional | The id of the [Wallet Product](../../doc/controllers/wallet-products.md#create-wallet-product) that denominates the wallet. Immutable for the life of the wallet. | getWalletProductId(): ?int | setWalletProductId(?int walletProductId): void |
| `walletProductName` | `?string` | Optional | The name of the Wallet Product that denominates the wallet. | getWalletProductName(): ?string | setWalletProductName(?string walletProductName): void |
| `unit` | `?string` | Optional | The billing product's unit name, immutable for the life of the wallet. | getUnit(): ?string | setUnit(?string unit): void |
| `pricePointId` | `?int` | Optional | The price point that priced this wallet's [purchases](../../doc/controllers/wallet-purchases.md#create-wallet-purchase), set on create and immutable afterward. Defaults to the Wallet Product's default price point; `null` if the Wallet Product has none and none was given on create. | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `balance` | `?string` | Optional | What the wallet can spend now, encoded as a decimal string to avoid floating-point precision loss. This is the number to enforce against. For a metered wallet, it includes usage not yet posted to the ledger, through `metered_through_at`, but only in the response from [Read Wallet](../../doc/controllers/wallets.md#read-wallet); every other response (list, create, update, archive) reports the balance as of the last ledger write, equal to `posted_balance`, even for a metered wallet. The grants' `remaining` follow this figure, so they add up to it whenever it is zero or more. | getBalance(): ?string | setBalance(?string balance): void |
| `postedBalance` | `?string` | Optional | The balance from written ledger entries alone: grants funded, minus debits written to the ledger, as a decimal string. Always present, also for a wallet with no meter. It equals `balance` wherever no live metered balance is computed: list, create, update, and archive responses, an unlinked or archived wallet, and a read where `metered_stale` is `true`. Only an active, metered wallet read through [Read Wallet](../../doc/controllers/wallets.md#read-wallet), with `metered_stale` not `true`, can have a `balance` below its `posted_balance`. It stays exact when `metered_stale` is `true`. Reconcile the transactions list (`balance_after`) against this figure, not against `balance`. | getPostedBalance(): ?string | setPostedBalance(?string postedBalance): void |
| `meter` | [`?Meter`](../../doc/models/meter.md) | Optional | The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create and immutable afterward. | getMeter(): ?Meter | setMeter(?Meter meter): void |
| `meteredThroughAt` | `?DateTime` | Optional | The point up to which live meter usage has been factored into `balance`. Populated only in the response from [Read Wallet](../../doc/controllers/wallets.md#read-wallet), for an active, metered wallet on a site with metered consumption enabled; `null` everywhere else, including list, create, update, and archive responses for the same wallet. | getMeteredThroughAt(): ?\DateTime | setMeteredThroughAt(?\DateTime meteredThroughAt): void |
| `meteredRecheckAfterSeconds` | `?int` | Optional | How many seconds to wait before re-reading `balance` to see usage past `metered_through_at`. Same availability as `metered_through_at`. | getMeteredRecheckAfterSeconds(): ?int | setMeteredRecheckAfterSeconds(?int meteredRecheckAfterSeconds): void |
| `meteredStale` | `?bool` | Optional | `true` when live usage could not be read fresh and `balance` reflects an earlier snapshot. Same availability as `metered_through_at`. | getMeteredStale(): ?bool | setMeteredStale(?bool meteredStale): void |
| `status` | [`?string(WalletStatus)`](../../doc/models/wallet-status.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `depletionPolicy` | `?string` | Optional | What happens when a debit would take the wallet below zero. Known values: `hard_stop` (the only value you can set today). More values are expected over time, so treat this as an open string and don't fail on one you don't recognize. At the zero boundary, `hard_stop` behaves as set by `hard_stop_overflow`. | getDepletionPolicy(): ?string | setDepletionPolicy(?string depletionPolicy): void |
| `hardStopOverflow` | [`?string(WalletHardStopOverflow)`](../../doc/models/wallet-hard-stop-overflow.md) | Optional | Behavior at the hard-stop boundary. `discard` drains the wallet to zero and rejects the excess (the default). `allow_negative` deducts the full amount, letting the balance go negative. The excess past the wallet's grants is booked as an overdraft ledger row with `grant_id` set to `null`. | getHardStopOverflow(): ?string | setHardStopOverflow(?string hardStopOverflow): void |
| `origin` | [`?string(WalletOrigin)`](../../doc/models/wallet-origin.md) | Optional | How the wallet came to exist. `manual` for a wallet created directly with [Create Wallet](../../doc/controllers/wallets.md#create-wallet). `feature` for a wallet auto-provisioned because a subscription resolved a usage-limit entitlement whose Feature has `wallet_behavior` configured. | getOrigin(): ?string | setOrigin(?string origin): void |
| `featureKey` | `?string` | Optional | The key of the Feature this wallet was provisioned for, when `origin` is `feature`. `null` for a `manual` wallet. | getFeatureKey(): ?string | setFeatureKey(?string featureKey): void |
| `grants` | [`?(WalletGrant[])`](../../doc/models/wallet-grant.md) | Optional | Every grant on the wallet, including ones already spent or expired, in drain order (the order debits would consume the still-open ones in): the soonest-expiring grant first, evergreen grants last. | getGrants(): ?array | setGrants(?array grants): void |
| `recurringFunding` | [`?(WalletRecurringFunding[])`](../../doc/models/wallet-recurring-funding.md) | Optional | The wallet's automatic funding schedules, if any. Empty for a `manual` wallet with no funding entitlement. A wallet funds automatically when it's provisioned from a Feature with `wallet_behavior` configured; see [the Wallets concept guide](page:introduction/basic-concepts/wallets#provisioning-a-wallet-from-a-feature). | getRecurringFunding(): ?array | setRecurringFunding(?array recurringFunding): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletBuilder;
use AdvancedBillingLib\Models\OwnerType;

$wallet = WalletBuilder::init()
    ->id(240)
    ->ownerType(OwnerType::SUBSCRIPTION)
    ->ownerId(60)
    ->name('name6')
    ->walletProductId(232)
    ->unit('tokens')
    ->balance('150.0')
    ->postedBalance('150.0')
    ->depletionPolicy('hard_stop')
    ->build();
```

