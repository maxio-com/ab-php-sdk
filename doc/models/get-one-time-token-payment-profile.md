
# Get One Time Token Payment Profile

## Structure

`GetOneTimeTokenPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `firstName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getFirstName(): string | setFirstName(string firstName): void |
| `lastName` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getLastName(): string | setLastName(string lastName): void |
| `maskedCardNumber` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMaskedCardNumber(): string | setMaskedCardNumber(string maskedCardNumber): void |
| `cardType` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCardType(): string | setCardType(string cardType): void |
| `expirationMonth` | `float` | Required | - | getExpirationMonth(): float | setExpirationMonth(float expirationMonth): void |
| `expirationYear` | `float` | Required | - | getExpirationYear(): float | setExpirationYear(float expirationYear): void |
| `customerId` | `?string` | Optional | - | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `currentVault` | [`string(CurrentVault)`](../../doc/models/current-vault.md) | Required | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): string | setCurrentVault(string currentVault): void |
| `vaultToken` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getVaultToken(): string | setVaultToken(string vaultToken): void |
| `billingAddress` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingAddress(): string | setBillingAddress(string billingAddress): void |
| `billingAddress2` | `?string` | Optional | - | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingCity(): string | setBillingCity(string billingCity): void |
| `billingCountry` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingCountry(): string | setBillingCountry(string billingCountry): void |
| `billingState` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingState(): string | setBillingState(string billingState): void |
| `billingZip` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getBillingZip(): string | setBillingZip(string billingZip): void |
| `paymentType` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `disabled` | `bool` | Required | - | getDisabled(): bool | setDisabled(bool disabled): void |
| `siteGatewaySettingId` | `int` | Required | - | getSiteGatewaySettingId(): int | setSiteGatewaySettingId(int siteGatewaySettingId): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "id": "id2",
  "first_name": "first_name2",
  "last_name": "last_name0",
  "masked_card_number": "masked_card_number0",
  "card_type": "card_type8",
  "expiration_month": 187.78,
  "expiration_year": 164.44,
  "customer_id": "customer_id0",
  "current_vault": "firstdata",
  "vault_token": "vault_token4",
  "billing_address": "billing_address4",
  "billing_address_2": "billing_address_24",
  "billing_city": "billing_city0",
  "billing_country": "billing_country6",
  "billing_state": "billing_state6",
  "billing_zip": "billing_zip0",
  "payment_type": "payment_type2",
  "disabled": false,
  "site_gateway_setting_id": 232,
  "customer_vault_token": "customer_vault_token0",
  "gateway_handle": "gateway_handle4"
}
```

