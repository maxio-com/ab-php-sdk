
# Wallet Purchase

A completed unit purchase.

## Structure

`WalletPurchase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | The id of the grant this purchase created. When the wallet was overdrawn by at least the purchased quantity, the units repay the debt and the grant is still created, with `remaining` of `0` and `original` equal to the purchased quantity. | getId(): int | setId(int id): void |
| `pricePointId` | `int` | Required | The price point the purchase was priced at. | getPricePointId(): int | setPricePointId(int pricePointId): void |
| `invoiceUid` | `string` | Required | The uid of the invoice created to collect payment for this purchase. | getInvoiceUid(): string | setInvoiceUid(string invoiceUid): void |
| `quantity` | `string` | Required | The number of units purchased, as a decimal string. | getQuantity(): string | setQuantity(string quantity): void |
| `expiresAt` | `?DateTime` | Required | When the purchased units expire, following the funding entitlement's grant expiration policy. `null` when the wallet has no funding entitlement or its entitlements disagree on an expiration policy. | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletPurchaseBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$walletPurchase = WalletPurchaseBuilder::init(
    218,
    96,
    'invoice_uid0',
    'quantity6'
)
    ->expiresAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

