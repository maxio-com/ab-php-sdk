
# Get One Time Token Bank Account Payment Profile

## Structure

`GetOneTimeTokenBankAccountPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `firstName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getFirstName(): string | setFirstName(string firstName): void |
| `lastName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getLastName(): string | setLastName(string lastName): void |
| `customerId` | `?string` | Optional | - | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `currentVault` | [`string(BankAccountVault)`](../../doc/models/bank-account-vault.md) | Required | The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing. | getCurrentVault(): string | setCurrentVault(string currentVault): void |
| `vaultToken` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getVaultToken(): string | setVaultToken(string vaultToken): void |
| `billingAddress` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingAddress(): string | setBillingAddress(string billingAddress): void |
| `billingAddress2` | `?string` | Optional | - | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingCity(): string | setBillingCity(string billingCity): void |
| `billingCountry` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingCountry(): string | setBillingCountry(string billingCountry): void |
| `billingState` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingState(): string | setBillingState(string billingState): void |
| `billingZip` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingZip(): string | setBillingZip(string billingZip): void |
| `bankName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBankName(): string | setBankName(string bankName): void |
| `maskedBankRoutingNumber` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMaskedBankRoutingNumber(): string | setMaskedBankRoutingNumber(string maskedBankRoutingNumber): void |
| `maskedBankAccountNumber` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMaskedBankAccountNumber(): string | setMaskedBankAccountNumber(string maskedBankAccountNumber): void |
| `bankAccountType` | [`string(BankAccountType)`](../../doc/models/bank-account-type.md) | Required | Defaults to checking | getBankAccountType(): string | setBankAccountType(string bankAccountType): void |
| `bankAccountHolderType` | [`string(BankAccountHolderType)`](../../doc/models/bank-account-holder-type.md) | Required | Defaults to personal | getBankAccountHolderType(): string | setBankAccountHolderType(string bankAccountHolderType): void |
| `paymentType` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `disabled` | `bool` | Required | - | getDisabled(): bool | setDisabled(bool disabled): void |
| `siteGatewaySettingId` | `int` | Required | - | getSiteGatewaySettingId(): int | setSiteGatewaySettingId(int siteGatewaySettingId): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `verified` | `?bool` | Optional | - | getVerified(): ?bool | setVerified(?bool verified): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\GetOneTimeTokenBankAccountPaymentProfileBuilder;
use AdvancedBillingLib\Models\BankAccountVault;
use AdvancedBillingLib\Models\BankAccountType;
use AdvancedBillingLib\Models\BankAccountHolderType;

$getOneTimeTokenBankAccountPaymentProfile = GetOneTimeTokenBankAccountPaymentProfileBuilder::init(
    'first_name0',
    'last_name8',
    BankAccountVault::MAXP,
    'vault_token2',
    'billing_address2',
    'billing_city8',
    'billing_country4',
    'billing_state6',
    'billing_zip8',
    'bank_name4',
    'masked_bank_routing_number4',
    'masked_bank_account_number2',
    BankAccountType::CHECKING,
    BankAccountHolderType::PERSONAL,
    'payment_type0',
    false,
    246
)
    ->id('id0')
    ->customerId('customer_id8')
    ->billingAddress2('billing_address_22')
    ->customerVaultToken('customer_vault_token8')
    ->gatewayHandle('gateway_handle2')
    ->build();
```

