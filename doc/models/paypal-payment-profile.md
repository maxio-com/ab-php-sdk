
# Paypal Payment Profile

## Structure

`PaypalPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify-assigned ID of the stored PayPal payment profile. | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | The first name of the PayPal account holder | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the PayPal account holder | getLastName(): ?string | setLastName(?string lastName): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the PayPal account belongs | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(PayPalVault)`](../../doc/models/pay-pal-vault.md) | Optional | The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the PayPal account | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The current billing address city for the PayPal account | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the PayPal account | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the PayPal account | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the PayPal account | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the PayPal account | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `paymentType` | [`string(PaymentType)`](../../doc/models/payment-type.md) | Required | **Default**: `PaymentType::PAYPAL_ACCOUNT` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `paypalEmail` | `?string` | Optional | - | getPaypalEmail(): ?string | setPaypalEmail(?string paypalEmail): void |

## Example (as JSON)

```json
{
  "payment_type": "paypal_account",
  "id": 10,
  "first_name": "first_name0",
  "last_name": "last_name8",
  "customer_id": 48,
  "current_vault": "moduslink"
}
```

