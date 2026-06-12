
# Invoice-Event-Payment

A nested data structure detailing the method of payment

## Data Type

`PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal`

## Cases

| Type |
|  --- |
| [`PaymentMethodApplePay`](../../../doc/models/payment-method-apple-pay.md) |
| [`PaymentMethodBankAccount`](../../../doc/models/payment-method-bank-account.md) |
| [`PaymentMethodCreditCard`](../../../doc/models/payment-method-credit-card.md) |
| [`PaymentMethodExternal`](../../../doc/models/payment-method-external.md) |
| [`PaymentMethodPaypal`](../../../doc/models/payment-method-paypal.md) |

## PaymentMethodApplePay

### Initialization Code

#### Example

```php
$value = PaymentMethodApplePayBuilder::init(
    InvoiceEventPaymentMethod::APPLE_PAY
)->build();
```

## PaymentMethodBankAccount

### Initialization Code

#### Example

```php
$value = PaymentMethodBankAccountBuilder::init(
    'masked_account_number2',
    'masked_routing_number2',
    InvoiceEventPaymentMethod::BANK_ACCOUNT
)->build();
```

## PaymentMethodCreditCard

### Initialization Code

#### Example

```php
$value = PaymentMethodCreditCardBuilder::init(
    'card_brand4',
    'masked_card_number0',
    InvoiceEventPaymentMethod::CREDIT_CARD
)->build();
```

## PaymentMethodExternal

### Initialization Code

#### Example

```php
$value = PaymentMethodExternalBuilder::init(
    'kind2',
    InvoiceEventPaymentMethod::EXTERNAL
)
    ->details('details4')
    ->memo('memo8')
    ->build();
```

## PaymentMethodPaypal

### Initialization Code

#### Example

```php
$value = PaymentMethodPaypalBuilder::init(
    'email2',
    InvoiceEventPaymentMethod::PAYPAL_ACCOUNT
)->build();
```

