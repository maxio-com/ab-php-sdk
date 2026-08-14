
# Payment Profile Response

## Structure

`PaymentProfileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [ApplePayPaymentProfile](../../doc/models/apple-pay-payment-profile.md)\|[BankAccountPaymentProfile](../../doc/models/bank-account-payment-profile.md)\|[CreditCardPaymentProfile](../../doc/models/credit-card-payment-profile.md)\|[PaypalPaymentProfile](../../doc/models/paypal-payment-profile.md) | Required | - | getPaymentProfile(): | setPaymentProfile( paymentProfile): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentProfileResponseBuilder;
use AdvancedBillingLib\Models\Builders\ApplePayPaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentType;
use AdvancedBillingLib\Models\ApplePayVault;

$paymentProfileResponse = PaymentProfileResponseBuilder::init(
    ApplePayPaymentProfileBuilder::init(
        PaymentType::APPLE_PAY
    )
        ->id(60)
        ->firstName('first_name2')
        ->lastName('last_name0')
        ->customerId(98)
        ->currentVault(ApplePayVault::BRAINTREE_BLUE)
        ->build()
)->build();
```

