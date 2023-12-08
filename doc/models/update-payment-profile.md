
# Update Payment Profile

## Structure

`UpdatePaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The first name of the card holder. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the card holder. | getLastName(): ?string | setLastName(?string lastName): void |
| `fullNumber` | `?string` | Optional | The full credit card number | getFullNumber(): ?string | setFullNumber(?string fullNumber): void |
| `cardType` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | The type of card used. | getCardType(): ?string | setCardType(?string cardType): void |
| `expirationMonth` | `?string` | Optional | (Optional when performing an Import via vault_token, required otherwise) The 1- or 2-digit credit card expiration month, as an integer or string, i.e. 5 | getExpirationMonth(): ?string | setExpirationMonth(?string expirationMonth): void |
| `expirationYear` | `?string` | Optional | (Optional when performing a Import via vault_token, required otherwise) The 4-digit credit card expiration year, as an integer or string, i.e. 2012 | getExpirationYear(): ?string | setExpirationYear(?string expirationYear): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `billingAddress` | `?string` | Optional | The credit card or bank account billing street address (i.e. 123 Main St.). This value is merely passed through to the payment gateway. | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The credit card or bank account billing address city (i.e. “Boston”). This value is merely passed through to the payment gateway. | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The credit card or bank account billing address state (i.e. MA). This value is merely passed through to the payment gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) in order to be valid for tax locale purposes. | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The credit card or bank account billing address zip code (i.e. 12345). This value is merely passed through to the payment gateway. | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The credit card or bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to the payment gateway. Some gateways require country codes in a specific format. Please check your gateway’s documentation. If creating an ACH subscription, only US is supported at this time. | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `billingAddress2` | `?string` | Optional | Second line of the customer’s billing address i.e. Apt. 100 | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |

## Example (as JSON)

```json
{
  "full_number": "5424000000000015",
  "first_name": "first_name2",
  "last_name": "last_name0",
  "card_type": "switch",
  "expiration_month": "expiration_month2"
}
```

