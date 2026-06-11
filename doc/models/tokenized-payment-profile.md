
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

## Example (as JSON)

```json
{
  "id": 72,
  "vault_token": "vault_token2",
  "gateway_handle": "gateway_handle8",
  "customer_vault_token": "customer_vault_token8"
}
```

