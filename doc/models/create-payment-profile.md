
# Create Payment Profile

## Structure

`CreatePaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyToken` | `?string` | Optional | Token received after sending billing informations using chargify.js. | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `paymentType` | [`?string(PaymentType)`](../../doc/models/payment-type.md) | Optional | **Default**: `PaymentType::CREDIT_CARD` | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `firstName` | `?string` | Optional | First name on card or bank account. If omitted, the first_name from customer attributes will be used. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last name on card or bank account. If omitted, the last_name from customer attributes will be used. | getLastName(): ?string | setLastName(?string lastName): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `fullNumber` | `?string` | Optional | The full credit card number | getFullNumber(): ?string | setFullNumber(?string fullNumber): void |
| `cardType` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | The type of card used. | getCardType(): ?string | setCardType(?string cardType): void |
| `expirationMonth` | int\|string\|null | Optional | This is a container for one-of cases. | getExpirationMonth(): | setExpirationMonth( expirationMonth): void |
| `expirationYear` | int\|string\|null | Optional | This is a container for one-of cases. | getExpirationYear(): | setExpirationYear( expirationYear): void |
| `billingAddress` | `?string` | Optional | The credit card or bank account billing street address (i.e. 123 Main St.). This value is merely passed through to the payment gateway. | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingAddress2` | `?string` | Optional | Second line of the customer’s billing address i.e. Apt. 100 | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `?string` | Optional | The credit card or bank account billing address city (i.e. “Boston”). This value is merely passed through to the payment gateway. | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The credit card or bank account billing address state (i.e. MA). This value is merely passed through to the payment gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale purposes. | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingCountry` | `?string` | Optional | The credit card or bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to the payment gateway. Some gateways require country codes in a specific format. Please check your gateway’s documentation. If creating an ACH subscription, only US is supported at this time. | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `billingZip` | `?string` | Optional | The credit card or bank account billing address zip code (i.e. 12345). This value is merely passed through to the payment gateway. | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage or Square) The customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `customerId` | `?int` | Optional | (Required when creating a new payment profile) The Chargify customer id. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `paypalEmail` | `?string` | Optional | used by merchants that implemented BraintreeBlue javaScript libraries on their own. We recommend using Chargify.js instead. | getPaypalEmail(): ?string | setPaypalEmail(?string paypalEmail): void |
| `paymentMethodNonce` | `?string` | Optional | used by merchants that implemented BraintreeBlue javaScript libraries on their own. We recommend using Chargify.js instead. | getPaymentMethodNonce(): ?string | setPaymentMethodNonce(?string paymentMethodNonce): void |
| `gatewayHandle` | `?string` | Optional | This attribute is only available if MultiGateway feature is enabled for your Site. This feature is in the Private Beta currently. gateway_handle is used to directly select a gateway where a payment profile will be stored in. Every connected gateway must have a unique gateway handle specified. Read [Multigateway description](https://chargify.zendesk.com/hc/en-us/articles/4407761759643#connecting-with-multiple-gateways) to learn more about new concepts that MultiGateway introduces and the default behavior when this attribute is not passed. | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `cvv` | `?string` | Optional | The 3- or 4-digit Card Verification Value. This value is merely passed through to the payment gateway. | getCvv(): ?string | setCvv(?string cvv): void |
| `bankName` | `?string` | Optional | (Required when creating with ACH or GoCardless, optional with Stripe Direct Debit). The name of the bank where the customerʼs account resides | getBankName(): ?string | setBankName(?string bankName): void |
| `bankIban` | `?string` | Optional | (Optional when creating with GoCardless, required with Stripe Direct Debit). International Bank Account Number. Alternatively, local bank details can be provided | getBankIban(): ?string | setBankIban(?string bankIban): void |
| `bankRoutingNumber` | `?string` | Optional | (Required when creating with ACH. Optional when creating a subscription with GoCardless). The routing number of the bank. It becomes bank_code while passing via GoCardless API | getBankRoutingNumber(): ?string | setBankRoutingNumber(?string bankRoutingNumber): void |
| `bankAccountNumber` | `?string` | Optional | (Required when creating with ACH, GoCardless, Stripe BECS Direct Debit and bank_iban is blank) The customerʼs bank account number | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `bankBranchCode` | `?string` | Optional | (Optional when creating with GoCardless, required with Stripe BECS Direct Debit) Branch code. Alternatively, an IBAN can be provided | getBankBranchCode(): ?string | setBankBranchCode(?string bankBranchCode): void |
| `bankAccountType` | `?string` | Optional | - | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountHolderType` | `?string` | Optional | - | getBankAccountHolderType(): ?string | setBankAccountHolderType(?string bankAccountHolderType): void |
| `lastFour` | `?string` | Optional | (Optional) Used for creating subscription with payment profile imported using vault_token, for proper display in Advanced Billing UI | getLastFour(): ?string | setLastFour(?string lastFour): void |

## Example (as JSON)

```json
{
  "chargify_token": "tok_9g6hw85pnpt6knmskpwp4ttt",
  "payment_type": "credit_card",
  "full_number": "5424000000000015",
  "id": 76,
  "first_name": "first_name8",
  "last_name": "last_name6"
}
```

