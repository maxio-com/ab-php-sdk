
# Payment-Profile 2

## Data Type

`ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile`

## Cases

| Type |
|  --- |
| [`ApplePayPaymentProfile`](../../../doc/models/apple-pay-payment-profile.md) |
| [`BankAccountPaymentProfile`](../../../doc/models/bank-account-payment-profile.md) |
| [`CreditCardPaymentProfile`](../../../doc/models/credit-card-payment-profile.md) |
| [`PaypalPaymentProfile`](../../../doc/models/paypal-payment-profile.md) |

## ApplePayPaymentProfile

### Initialization Code

#### Example

```php
$value = ApplePayPaymentProfileBuilder::init(
    PaymentType::APPLE_PAY
)->build();
```

## BankAccountPaymentProfile

### Initialization Code

#### Example

```php
$value = BankAccountPaymentProfileBuilder::init(
    PaymentType::BANK_ACCOUNT
)
    ->verified(false)
    ->build();
```

## CreditCardPaymentProfile

### Initialization Code

#### Example

```php
$value = CreditCardPaymentProfileBuilder::init(
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

## PaypalPaymentProfile

### Initialization Code

#### Example

```php
$value = PaypalPaymentProfileBuilder::init(
    PaymentType::PAYPAL_ACCOUNT
)->build();
```

