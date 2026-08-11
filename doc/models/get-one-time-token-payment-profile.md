
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
| `cardType` | [`string(CardType)`](../../doc/models/card-type.md) | Required | The type of card used. | getCardType(): string | setCardType(string cardType): void |
| `expirationMonth` | `float` | Required | - | getExpirationMonth(): float | setExpirationMonth(float expirationMonth): void |
| `expirationYear` | `float` | Required | - | getExpirationYear(): float | setExpirationYear(float expirationYear): void |
| `customerId` | `?string` | Optional | - | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `currentVault` | [`string(CreditCardVault)`](../../doc/models/credit-card-vault.md) | Required | The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing. | getCurrentVault(): string | setCurrentVault(string currentVault): void |
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

## Example

```php
use AdvancedBillingLib\Models\Builders\GetOneTimeTokenPaymentProfileBuilder;
use AdvancedBillingLib\Models\CardType;
use AdvancedBillingLib\Models\CreditCardVault;

$getOneTimeTokenPaymentProfile = GetOneTimeTokenPaymentProfileBuilder::init(
    'first_name4',
    'last_name2',
    'masked_card_number2',
    CardType::MAESTRO_NO_LUHN,
    28.3,
    4.96,
    CreditCardVault::TRUST_COMMERCE,
    'vault_token6',
    'billing_address6',
    'billing_city2',
    'billing_country8',
    'billing_state2',
    'billing_zip2',
    'payment_type6',
    false,
    156
)
    ->id('id4')
    ->customerId('customer_id2')
    ->billingAddress2('billing_address_26')
    ->customerVaultToken('customer_vault_token2')
    ->gatewayHandle('gateway_handle6')
    ->build();
```

