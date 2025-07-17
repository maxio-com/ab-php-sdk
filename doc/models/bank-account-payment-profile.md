
# Bank Account Payment Profile

## Structure

`BankAccountPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify-assigned ID of the stored bank account. This value can be used as an input to payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the same customer | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | The first name of the bank account holder | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the bank account holder | getLastName(): ?string | setLastName(?string lastName): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the bank account belongs | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the bank account | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The current billing address city for the bank account | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the bank account | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the bank account | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the bank account | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage): the customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token. | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the bank account | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `bankName` | `?string` | Optional | The bank where the account resides | getBankName(): ?string | setBankName(?string bankName): void |
| `maskedBankRoutingNumber` | `?string` | Optional | A string representation of the stored bank routing number with all but the last 4 digits marked with X’s (i.e. ‘XXXXXXX1111’). payment_type will be bank_account | getMaskedBankRoutingNumber(): ?string | setMaskedBankRoutingNumber(?string maskedBankRoutingNumber): void |
| `maskedBankAccountNumber` | `string` | Required | A string representation of the stored bank account number with all but the last 4 digits marked with X’s (i.e. ‘XXXXXXX1111’) | getMaskedBankAccountNumber(): string | setMaskedBankAccountNumber(string maskedBankAccountNumber): void |
| `bankAccountType` | [`?string(BankAccountType)`](../../doc/models/bank-account-type.md) | Optional | Defaults to checking | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountHolderType` | [`?string(BankAccountHolderType)`](../../doc/models/bank-account-holder-type.md) | Optional | Defaults to personal | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `paymentType` | [`string(PaymentType)`](../../doc/models/payment-type.md) | Required | **Default**: `PaymentType::BANK_ACCOUNT` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `verified` | `?bool` | Optional | denotes whether a bank account has been verified by providing the amounts of two small deposits made into the account<br><br>**Default**: `false` | getVerified(): ?bool | setVerified(?bool verified): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `createdAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was last updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example (as JSON)

```json
{
  "masked_bank_account_number": "masked_bank_account_number8",
  "payment_type": "bank_account",
  "verified": false,
  "id": 188,
  "first_name": "first_name6",
  "last_name": "last_name4",
  "customer_id": 226,
  "current_vault": "authorizenet"
}
```

