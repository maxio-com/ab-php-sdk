
# Wallet Product Usage Response

## Structure

`WalletProductUsageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `walletTemplates` | [`WalletProductUsageTemplate[]`](../../doc/models/wallet-product-usage-template.md) | Required | Wallet templates billing through this product at its default price point. | getWalletTemplates(): array | setWalletTemplates(array walletTemplates): void |
| `pricePointOverrides` | [`WalletProductUsageTemplate[]`](../../doc/models/wallet-product-usage-template.md) | Required | Wallet templates billing through this product at a price point other than the default. | getPricePointOverrides(): array | setPricePointOverrides(array pricePointOverrides): void |
| `activeWallets` | [`ActiveWallets`](../../doc/models/active-wallets.md) | Required | - | getActiveWallets(): ActiveWallets | setActiveWallets(ActiveWallets activeWallets): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductUsageResponseBuilder;
use AdvancedBillingLib\Models\Builders\WalletProductUsageTemplateBuilder;
use AdvancedBillingLib\Models\Builders\ActiveWalletsBuilder;
use AdvancedBillingLib\Models\Builders\WalletProductActiveWalletBuilder;

$walletProductUsageResponse = WalletProductUsageResponseBuilder::init(
    [
        WalletProductUsageTemplateBuilder::init()
            ->planName('plan_name4')
            ->walletTemplateName('wallet_template_name2')
            ->unitName('unit_name4')
            ->purchaseMechanism('purchase_mechanism2')
            ->pricePointName('price_point_name4')
            ->build()
    ],
    [
        WalletProductUsageTemplateBuilder::init()
            ->planName('plan_name0')
            ->walletTemplateName('wallet_template_name2')
            ->unitName('unit_name0')
            ->purchaseMechanism('purchase_mechanism8')
            ->pricePointName('price_point_name8')
            ->build()
    ],
    ActiveWalletsBuilder::init(
        164,
        [
            WalletProductActiveWalletBuilder::init()
                ->id(180)
                ->subscriptionId(34)
                ->companyName('company_name4')
                ->purchaseMechanism('purchase_mechanism8')
                ->pricePointName('price_point_name8')
                ->build()
        ]
    )->build()
)->build();
```

