
# Bank Account Attributes

## Structure

`BankAccountAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyToken` | `?string` | Optional | - | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `bankName` | `?string` | Optional | (Required when creating a subscription with ACH or GoCardless) The name of the bank where the customer’s account resides | getBankName(): ?string | setBankName(?string bankName): void |
| `bankRoutingNumber` | `?string` | Optional | (Required when creating a subscription with ACH. Optional when creating a subscription with GoCardless). The routing number of the bank. It becomes bank_code while passing via GoCardless API | getBankRoutingNumber(): ?string | setBankRoutingNumber(?string bankRoutingNumber): void |
| `bankAccountNumber` | `?string` | Optional | (Required when creating a subscription with ACH. Required when creating a subscription with GoCardless and bank_iban is blank) The customerʼs bank account number | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `bankAccountType` | `?string` | Optional | - | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankBranchCode` | `?string` | Optional | (Optional when creating a subscription with GoCardless) Branch code. Alternatively, an IBAN can be provided | getBankBranchCode(): ?string | setBankBranchCode(?string bankBranchCode): void |
| `bankIban` | `?string` | Optional | (Optional when creating a subscription with GoCardless). International Bank Account Number. Alternatively, local bank details can be provided | getBankIban(): ?string | setBankIban(?string bankIban): void |
| `bankAccountHolderType` | `?string` | Optional | - | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `currentVault` | [`?string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | - | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage or Square) The customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |

## Example (as JSON)

```json
{
  "chargify_token": "chargify_token0",
  "bank_name": "bank_name2",
  "bank_routing_number": "bank_routing_number8",
  "bank_account_number": "bank_account_number4",
  "bank_account_type": "bank_account_type0"
}
```

