
# Apple Pay Payment Profile

## Structure

`ApplePayPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify-assigned ID of the Apple Pay payment profile. | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | The first name of the Apple Pay account holder | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the Apple Pay account holder | getLastName(): ?string | setLastName(?string lastName): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the Apple Pay account belongs | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(ApplePayVault)`](../../doc/models/apple-pay-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the Apple Pay account | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The current billing address city for the Apple Pay account | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the Apple Pay account | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the Apple Pay account | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the Apple Pay account | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the Apple Pay account | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `paymentType` | [`string(PaymentType)`](../../doc/models/payment-type.md) | Required | **Default**: `PaymentType::APPLE_PAY` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `createdAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was last updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example (as JSON)

```json
{
  "payment_type": "apple_pay",
  "id": 60,
  "first_name": "first_name2",
  "last_name": "last_name0",
  "customer_id": 98,
  "current_vault": "braintree_blue"
}
```

