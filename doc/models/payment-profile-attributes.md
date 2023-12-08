
# Payment Profile Attributes

alias to credit_card_attributes

## Structure

`PaymentProfileAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyToken` | `?string` | Optional | (Optional) Token received after sending billing informations using chargify.js. This token must be passed as a sole attribute of `payment_profile_attributes` (i.e. tok_9g6hw85pnpt6knmskpwp4ttt) | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `firstName` | `?string` | Optional | (Optional) First name on card or bank account. If omitted, the first_name from customer attributes will be used. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | (Optional) Last name on card or bank account. If omitted, the last_name from customer attributes will be used. | getLastName(): ?string | setLastName(?string lastName): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `fullNumber` | `?string` | Optional | The full credit card number (string representation, i.e. 5424000000000015) | getFullNumber(): ?string | setFullNumber(?string fullNumber): void |
| `cardType` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | (Optional, used only for Subscription Import) If you know the card type (i.e. Visa, MC, etc) you may supply it here so that we may display the card type in the UI. | getCardType(): ?string | setCardType(?string cardType): void |
| `expirationMonth` | int\|string\|null | Optional | This is a container for one-of cases. | getExpirationMonth(): | setExpirationMonth( expirationMonth): void |
| `expirationYear` | int\|string\|null | Optional | This is a container for one-of cases. | getExpirationYear(): | setExpirationYear( expirationYear): void |
| `billingAddress` | `?string` | Optional | (Optional, may be required by your product configuration or gateway settings) The credit card or bank account billing street address (i.e. 123 Main St.). This value is merely passed through to the payment gateway. | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingAddress2` | `?string` | Optional | (Optional) Second line of the customer’s billing address i.e. Apt. 100 | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `?string` | Optional | (Optional, may be required by your product configuration or gateway settings) The credit card or bank account billing address city (i.e. “Boston”). This value is merely passed through to the payment gateway. | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | (Optional, may be required by your product configuration or gateway settings) The credit card or bank account billing address state (i.e. MA). This value is merely passed through to the payment gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale purposes. | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingCountry` | `?string` | Optional | (Optional, may be required by your product configuration or gateway settings) The credit card or bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to the payment gateway. Some gateways require country codes in a specific format. Please check your gateway’s documentation. If creating an ACH subscription, only US is supported at this time. | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `billingZip` | `?string` | Optional | (Optional, may be required by your product configuration or gateway settings) The credit card or bank account billing address zip code (i.e. 12345). This value is merely passed through to the payment gateway. | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | (Optional, used only for Subscription Import) The vault that stores the payment profile with the provided vault_token. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | (Optional, used only for Subscription Import) The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `customerVaultToken` | `?string` | Optional | (Optional, used only for Subscription Import) (only for Authorize.Net CIM storage or Square) The customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `customerId` | `?int` | Optional | - | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paypalEmail` | `?string` | Optional | - | getPaypalEmail(): ?string | setPaypalEmail(?string paypalEmail): void |
| `paymentMethodNonce` | `?string` | Optional | (Required for Square unless importing with vault_token and customer_vault_token) The nonce generated by the Square Javascript library (SqPaymentForm) | getPaymentMethodNonce(): ?string | setPaymentMethodNonce(?string paymentMethodNonce): void |
| `gatewayHandle` | `?string` | Optional | (Optional) This attribute is only available if MultiGateway feature is enabled for your Site. This feature is in the Private Beta currently. gateway_handle is used to directly select a gateway where a payment profile will be stored in. Every connected gateway must have a unique gateway handle specified. Read [Multigateway description](https://chargify.zendesk.com/hc/en-us/articles/4407761759643#connecting-with-multiple-gateways) to learn more about new concepts that MultiGateway introduces and the default behavior when this attribute is not passed. | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `cvv` | `?string` | Optional | (Optional, may be required by your gateway settings) The 3- or 4-digit Card Verification Value. This value is merely passed through to the payment gateway. | getCvv(): ?string | setCvv(?string cvv): void |
| `lastFour` | `?string` | Optional | (Optional, used only for Subscription Import) If you have the last 4 digits of the credit card number, you may supply them here so that we may create a masked card number (i.e. XXXX-XXXX-XXXX-1234) for display in the UI. Last 4 digits are required for refunds in Auth.Net. | getLastFour(): ?string | setLastFour(?string lastFour): void |

## Example (as JSON)

```json
{
  "chargify_token": "chargify_token8",
  "id": 80,
  "payment_type": "payment_type0",
  "first_name": "first_name0",
  "last_name": "last_name8"
}
```

