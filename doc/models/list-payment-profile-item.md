
# List Payment Profile Item

## Structure

`ListPaymentProfileItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | - | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | - | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | - | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | - | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | - | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | - | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | - | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `bankName` | `?string` | Optional | - | getBankName(): ?string | setBankName(?string bankName): void |
| `maskedBankRoutingNumber` | `?string` | Optional | - | getMaskedBankRoutingNumber(): ?string | setMaskedBankRoutingNumber(?string maskedBankRoutingNumber): void |
| `maskedBankAccountNumber` | `?string` | Optional | - | getMaskedBankAccountNumber(): ?string | setMaskedBankAccountNumber(?string maskedBankAccountNumber): void |
| `bankAccountType` | `?string` | Optional | - | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountHolderType` | `?string` | Optional | - | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "id": 56,
  "first_name": "first_name6",
  "last_name": "last_name4",
  "customer_id": 94,
  "current_vault": "bogus"
}
```

