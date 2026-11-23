
# Wallet Transaction 1

## Structure

`WalletTransaction1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | [`string(Kind1)`](../../doc/models/kind-1.md) | Required | Determines the direction of the movement. The amount itself is always sent positive. | getKind(): string | setKind(string kind): void |
| `amount` | string\|int | Required | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getMemo(): ?string | setMemo(?string memo): void |
| `expiresAt` | `?string` | Optional | An expiration for the grant this creates. Only accepted with `kind: grant`; sending it with `kind: debit` is rejected. Omit it for an evergreen grant. Accepts either a bare calendar date (`YYYY-MM-DD`), resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day that doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next month. | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletTransaction1Builder;
use AdvancedBillingLib\Models\Kind1;

$walletTransaction1 = WalletTransaction1Builder::init(
    Kind1::GRANT,
    'String5'
)
    ->memo('memo6')
    ->expiresAt('expires_at4')
    ->build();
```

