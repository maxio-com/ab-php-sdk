
# Bank Account Payment Profile

## Structure

`BankAccountPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | - | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | - | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | - | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | - | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | - | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | - | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | - | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `bankName` | `?string` | Optional | - | getBankName(): ?string | setBankName(?string bankName): void |
| `maskedBankRoutingNumber` | `string` | Required | - | getMaskedBankRoutingNumber(): string | setMaskedBankRoutingNumber(string maskedBankRoutingNumber): void |
| `maskedBankAccountNumber` | `string` | Required | - | getMaskedBankAccountNumber(): string | setMaskedBankAccountNumber(string maskedBankAccountNumber): void |
| `bankAccountType` | `?string` | Optional | - | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountHolderType` | `?string` | Optional | - | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `verified` | `?bool` | Optional | denotes whether a bank account has been verified by providing the amounts of two small deposits made into the account<br>**Default**: `false` | getVerified(): ?bool | setVerified(?bool verified): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "masked_bank_routing_number": "masked_bank_routing_number8",
  "masked_bank_account_number": "masked_bank_account_number8",
  "verified": false,
  "id": 188,
  "first_name": "first_name6",
  "last_name": "last_name4",
  "customer_id": 226,
  "current_vault": "authorizenet"
}
```

