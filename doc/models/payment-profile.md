
# Payment Profile

## Structure

`PaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify-assigned ID of the stored card. This value can be used as an input to payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the same customer. | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | The first name of the card holder. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the card holder. | getLastName(): ?string | setLastName(?string lastName): void |
| `maskedCardNumber` | `?string` | Optional | A string representation of the credit card number with all but the last 4 digits masked with X’s (i.e. ‘XXXX-XXXX-XXXX-1234’). | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `cardType` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | The type of card used. | getCardType(): ?string | setCardType(?string cardType): void |
| `expirationMonth` | `?int` | Optional | An integer representing the expiration month of the card(1 – 12). | getExpirationMonth(): ?int | setExpirationMonth(?int expirationMonth): void |
| `expirationYear` | `?int` | Optional | An integer representing the 4-digit expiration year of the card(i.e. ‘2012’). | getExpirationYear(): ?int | setExpirationYear(?int expirationYear): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the card belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile. | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the card. | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The current billing address city for the card. | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the card. | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the card. | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the card. | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage): the customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token. | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the card. | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `paymentType` | [`?string(PaymentType)`](../../doc/models/payment-type.md) | Optional | **Default**: `PaymentType::CREDIT_CARD` | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `disabled` | `?bool` | Optional | - | getDisabled(): ?bool | setDisabled(?bool disabled): void |
| `chargifyToken` | `?string` | Optional | Token received after sending billing informations using chargify.js. | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | An identifier of connected gateway. | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |

## Example (as JSON)

```json
{
  "id": 10088716,
  "first_name": "Test",
  "last_name": "Subscription",
  "masked_card_number": "XXXX-XXXX-XXXX-1",
  "card_type": "bogus",
  "expiration_month": 1,
  "expiration_year": 2022,
  "customer_id": 14543792,
  "current_vault": "bogus",
  "vault_token": "1",
  "billing_address": "123 Montana Way",
  "billing_city": "Billings",
  "billing_state": "MT",
  "billing_zip": "59101",
  "billing_country": "US",
  "customer_vault_token": null,
  "billing_address_2": "",
  "payment_type": "credit_card",
  "site_gateway_setting_id": 1,
  "gateway_handle": null
}
```

