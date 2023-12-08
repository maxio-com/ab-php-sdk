
# Subscription Group Bank Account

## Structure

`SubscriptionGroupBankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankName` | `?string` | Optional | (Required when creating a subscription with ACH or GoCardless) The name of the bank where the customer’s account resides | getBankName(): ?string | setBankName(?string bankName): void |
| `bankAccountNumber` | `?string` | Optional | (Required when creating a subscription with ACH. Required when creating a subscription with GoCardless and bank_iban is blank) The customerʼs bank account number | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `bankRoutingNumber` | `?string` | Optional | (Required when creating a subscription with ACH. Optional when creating a subscription with GoCardless). The routing number of the bank. It becomes bank_code while passing via GoCardless API | getBankRoutingNumber(): ?string | setBankRoutingNumber(?string bankRoutingNumber): void |
| `bankIban` | `?string` | Optional | (Optional when creating a subscription with GoCardless). International Bank Account Number. Alternatively, local bank details can be provided | getBankIban(): ?string | setBankIban(?string bankIban): void |
| `bankBranchCode` | `?string` | Optional | (Optional when creating a subscription with GoCardless) Branch code. Alternatively, an IBAN can be provided | getBankBranchCode(): ?string | setBankBranchCode(?string bankBranchCode): void |
| `bankAccountType` | [`?string(BankAccountType)`](../../doc/models/bank-account-type.md) | Optional | **Default**: `BankAccountType::CHECKING` | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountHolderType` | [`?string(HolderType)`](../../doc/models/holder-type.md) | Optional | - | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `billingAddress` | `?string` | Optional | - | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | - | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | - | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | - | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | - | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `chargifyToken` | `?string` | Optional | - | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `currentVault` | [`?string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "bank_account_type": "checking",
  "bank_name": "bank_name2",
  "bank_account_number": "bank_account_number4",
  "bank_routing_number": "bank_routing_number8",
  "bank_iban": "bank_iban6",
  "bank_branch_code": "bank_branch_code6"
}
```

