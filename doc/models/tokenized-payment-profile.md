
# Tokenized Payment Profile

## Structure

`TokenizedPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `vaultToken` | `?string` | Optional | - | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\TokenizedPaymentProfileBuilder;

$tokenizedPaymentProfile = TokenizedPaymentProfileBuilder::init(
    116
)
    ->vaultToken('vault_token0')
    ->gatewayHandle('gateway_handle0')
    ->customerVaultToken('customer_vault_token6')
    ->build();
```

