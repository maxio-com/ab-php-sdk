
# Subscription Bank Account

## Structure

`SubscriptionBankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountHolderType` | `?string` | Optional | Defaults to personal | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `bankAccountType` | `?string` | Optional | Defaults to checking | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankName` | `?string` | Optional | The bank where the account resides | getBankName(): ?string | setBankName(?string bankName): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the bank account | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the bank account | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `?string` | Optional | The current billing address city for the bank account | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the bank account | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the bank account | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the bank account | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `currentVault` | [`?string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the bank account belongs | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage): the customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `firstName` | `?string` | Optional | The first name of the bank account holder | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the bank account holder | getLastName(): ?string | setLastName(?string lastName): void |
| `id` | `?int` | Optional | The Chargify-assigned ID of the stored bank account. This value can be used as an input to payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the same customer | getId(): ?int | setId(?int id): void |
| `maskedBankAccountNumber` | `?string` | Optional | A string representation of the stored bank account number with all but the last 4 digits marked with X’s (i.e. ‘XXXXXXX1111’) | getMaskedBankAccountNumber(): ?string | setMaskedBankAccountNumber(?string maskedBankAccountNumber): void |
| `maskedBankRoutingNumber` | `?string` | Optional | A string representation of the stored bank routing number with all but the last 4 digits marked with X’s (i.e. ‘XXXXXXX1111’). payment_type will be bank_account | getMaskedBankRoutingNumber(): ?string | setMaskedBankRoutingNumber(?string maskedBankRoutingNumber): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `chargifyToken` | `?string` | Optional | Token received after sending billing informations using chargify.js. This token will only be received if passed as a sole attribute of credit_card_attributes (i.e. tok_9g6hw85pnpt6knmskpwp4ttt) | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "bank_account_holder_type": "bank_account_holder_type4",
  "bank_account_type": "bank_account_type4",
  "bank_name": "bank_name8",
  "billing_address": "billing_address8",
  "billing_address_2": "billing_address_28"
}
```

