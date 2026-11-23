
# Create Wallet Purchase Request

Purchases prepaid units for the wallet at a price point, charging the subscription's payment method.

## Structure

`CreateWalletPurchaseRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `purchase` | [`Purchase`](../../doc/models/purchase.md) | Required | - | getPurchase(): Purchase | setPurchase(Purchase purchase): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateWalletPurchaseRequestBuilder;
use AdvancedBillingLib\Models\Builders\PurchaseBuilder;

$createWalletPurchaseRequest = CreateWalletPurchaseRequestBuilder::init(
    PurchaseBuilder::init(
        'String5'
    )
        ->pricePointId(20)
        ->memo('memo2')
        ->build()
)->build();
```

