
# Credit Card Payment Profile

## Structure

`CreditCardPaymentProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The Chargify-assigned ID of the stored card. This value can be used as an input to payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the same customer. | getId(): ?int | setId(?int id): void |
| `firstName` | `?string` | Optional | The first name of the card holder. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name of the card holder. | getLastName(): ?string | setLastName(?string lastName): void |
| `maskedCardNumber` | `?string` | Optional | A string representation of the credit card number with all but the last 4 digits masked with X’s (e.g., ‘XXXX-XXXX-XXXX-1234’). | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |
| `cardType` | [`?string(CardType)`](../../doc/models/card-type.md) | Optional | The type of card used. | getCardType(): ?string | setCardType(?string cardType): void |
| `expirationMonth` | `?int` | Optional | An integer representing the expiration month of the card(1 – 12). | getExpirationMonth(): ?int | setExpirationMonth(?int expirationMonth): void |
| `expirationYear` | `?int` | Optional | An integer representing the 4-digit expiration year of the card(e.g., ‘2012’). | getExpirationYear(): ?int | setExpirationYear(?int expirationYear): void |
| `customerId` | `?int` | Optional | The Chargify-assigned id for the customer record to which the card belongs. | getCustomerId(): ?int | setCustomerId(?int customerId): void |
| `currentVault` | [`?string(CreditCardVault)`](../../doc/models/credit-card-vault.md) | Optional | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): ?string | setCurrentVault(?string currentVault): void |
| `vaultToken` | `?string` | Optional | The “token” provided by your vault storage for an already stored payment profile. | getVaultToken(): ?string | setVaultToken(?string vaultToken): void |
| `billingAddress` | `?string` | Optional | The current billing street address for the card. | getBillingAddress(): ?string | setBillingAddress(?string billingAddress): void |
| `billingCity` | `?string` | Optional | The current billing address city for the card. | getBillingCity(): ?string | setBillingCity(?string billingCity): void |
| `billingState` | `?string` | Optional | The current billing address state for the card. | getBillingState(): ?string | setBillingState(?string billingState): void |
| `billingZip` | `?string` | Optional | The current billing address zip code for the card. | getBillingZip(): ?string | setBillingZip(?string billingZip): void |
| `billingCountry` | `?string` | Optional | The current billing address country for the card. | getBillingCountry(): ?string | setBillingCountry(?string billingCountry): void |
| `customerVaultToken` | `?string` | Optional | (only for Authorize.Net CIM storage): the customerProfileId for the owner of the customerPaymentProfileId provided as the vault_token. | getCustomerVaultToken(): ?string | setCustomerVaultToken(?string customerVaultToken): void |
| `billingAddress2` | `?string` | Optional | The current billing street address, second line, for the card. | getBillingAddress2(): ?string | setBillingAddress2(?string billingAddress2): void |
| `paymentType` | [`string(PaymentType)`](../../doc/models/payment-type.md) | Required | **Default**: `PaymentType::CREDIT_CARD` | getPaymentType(): string | setPaymentType(string paymentType): void |
| `disabled` | `?bool` | Optional | - | getDisabled(): ?bool | setDisabled(?bool disabled): void |
| `chargifyToken` | `?string` | Optional | Token received after sending billing information using Maxio.js (formerly Chargify.js). This token will only be received if passed as a sole attribute of credit_card_attributes (e.g., tok_9g6hw85pnpt6knmskpwp4ttt). | getChargifyToken(): ?string | setChargifyToken(?string chargifyToken): void |
| `siteGatewaySettingId` | `?int` | Optional | - | getSiteGatewaySettingId(): ?int | setSiteGatewaySettingId(?int siteGatewaySettingId): void |
| `gatewayHandle` | `?string` | Optional | An identifier of connected gateway. | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `createdAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | A timestamp indicating when this payment profile was last updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreditCardPaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentType;
use AdvancedBillingLib\Models\CardType;
use AdvancedBillingLib\Models\CreditCardVault;

$creditCardPaymentProfile = CreditCardPaymentProfileBuilder::init(
    PaymentType::CREDIT_CARD
)
    ->id(10088716)
    ->firstName('Test')
    ->lastName('Subscription')
    ->maskedCardNumber('XXXX-XXXX-XXXX-1')
    ->cardType(CardType::BOGUS)
    ->expirationMonth(1)
    ->expirationYear(2022)
    ->customerId(14543792)
    ->currentVault(CreditCardVault::BOGUS)
    ->vaultToken('1')
    ->billingAddress('123 Montana Way')
    ->billingCity('Billings')
    ->billingState('MT')
    ->billingZip('59101')
    ->billingCountry('US')
    ->customerVaultToken('customer_vault_token2')
    ->billingAddress2('')
    ->siteGatewaySettingId(1)
    ->gatewayHandle('gateway_handle8')
    ->build();
```

