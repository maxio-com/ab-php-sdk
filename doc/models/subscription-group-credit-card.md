
# Subscription Group Credit Card

## Structure

`SubscriptionGroupCreditCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fullNumber` | string\|int\|null | Optional | This is a container for one-of cases. | getFullNumber(): | setFullNumber( fullNumber): void |
| `expirationMonth` | string\|int\|null | Optional | This is a container for one-of cases. | getExpirationMonth(): | setExpirationMonth( expirationMonth): void |
| `expirationYear` | string\|int\|null | Optional | This is a container for one-of cases. | getExpirationYear(): | setExpirationYear( expirationYear): void |
| `chargifyToken` | `?string` | Optional | - | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `vaultToken` | `?string` | Optional | - | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `currentVault` | [`?string(CurrentVault)`](../../doc/models/current-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `billingAddress` | `?string` | Optional | - | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingAddress2` | `?string` | Optional | - | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `billingCity` | `?string` | Optional | - | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | - | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | - | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | - | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `cardType` | `?string` | Optional | - | getCardType(): ?string | setCardType(?string cardType): void |
| `customerVaultToken` | `?string` | Optional | - | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `cvv` | `?string` | Optional | - | getCvv(): ?string | setCvv(?string cvv): void |
| `paymentType` | `?string` | Optional | - | getPaymentType(): ?string | setPaymentType(?string paymentType): void |

## Example (as JSON)

```json
{
  "full_number": 4111111111111111,
  "chargify_token": "tok_592nf92ng0sjd4300p",
  "card_type": "visa",
  "expiration_month": "String1",
  "expiration_year": "String5",
  "vault_token": "vault_token6"
}
```

