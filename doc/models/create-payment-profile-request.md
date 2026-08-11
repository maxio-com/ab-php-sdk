
# Create Payment Profile Request

## Structure

`CreatePaymentProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`CreatePaymentProfile`](../../doc/models/create-payment-profile.md) | Required | - | getPaymentProfile(): CreatePaymentProfile | setPaymentProfile(CreatePaymentProfile paymentProfile): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreatePaymentProfileRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreatePaymentProfileBuilder;
use AdvancedBillingLib\Models\PaymentType;

$createPaymentProfileRequest = CreatePaymentProfileRequestBuilder::init(
    CreatePaymentProfileBuilder::init()
        ->chargifyToken('tok_9g6hw85pnpt6knmskpwp4ttt')
        ->id(44)
        ->paymentType(PaymentType::CREDIT_CARD)
        ->firstName('first_name4')
        ->lastName('last_name2')
        ->fullNumber('5424000000000015')
        ->build()
)->build();
```

