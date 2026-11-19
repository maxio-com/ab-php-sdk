
# Wallet Purchase Preview

A price quote for a purchase, without charging anything.

## Structure

`WalletPurchasePreview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePointId` | `int` | Required | - | getPricePointId(): int | setPricePointId(int pricePointId): void |
| `currency` | `string` | Required | The three-letter currency code the `amount` is denominated in, matching the subscription's currency. | getCurrency(): string | setCurrency(string currency): void |
| `quantity` | `string` | Required | The number of units the quote is for, as a decimal string. | getQuantity(): string | setQuantity(string quantity): void |
| `amount` | `string` | Required | The price for `quantity` units at this price point, as a decimal string. | getAmount(): string | setAmount(string amount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletPurchasePreviewBuilder;

$walletPurchasePreview = WalletPurchasePreviewBuilder::init(
    98,
    'USD',
    'quantity4',
    'amount0'
)->build();
```

