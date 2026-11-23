
# Wallet Product Active Wallet

One active wallet drawing on this Wallet Product.

## Structure

`WalletProductActiveWallet`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Advanced Billing id of the wallet. | getId(): ?int | setId(?int id): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |
| `companyName` | `?string` | Optional | The owning customer's organization name, falling back to their full name, then to `"Customer #<id>"`. `"Customer"` (with no id) when the wallet's subscription has no customer at all. | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `purchaseMechanism` | `?string` | Optional | See the same field on [Wallet Product Usage Template](../../doc/models/wallet-product-usage-template.md). The same caveats apply. | getPurchaseMechanism(): ?string | setPurchaseMechanism(?string purchaseMechanism): void |
| `pricePointName` | `?string` | Optional | - | getPricePointName(): ?string | setPricePointName(?string pricePointName): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `active` | `?bool` | Optional | `false` when the wallet's Feature is archived. | getActive(): ?bool | setActive(?bool active): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductActiveWalletBuilder;

$walletProductActiveWallet = WalletProductActiveWalletBuilder::init()
    ->id(214)
    ->subscriptionId(68)
    ->companyName('company_name8')
    ->purchaseMechanism('purchase_mechanism2')
    ->pricePointName('price_point_name4')
    ->build();
```

