
# Chjs Tokenization Failure

## Structure

`ChjsTokenizationFailure`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | `string` | Required | - | getErrors(): string | setErrors(string errors): void |
| `paymentProfileParams` | [`?PaymentProfileParams`](../../doc/models/payment-profile-params.md) | Optional | PCI-safe cardholder fields only. Full card numbers, CVV, and billing address are never included. | getPaymentProfileParams(): ?PaymentProfileParams | setPaymentProfileParams(?PaymentProfileParams paymentProfileParams): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChjsTokenizationFailureBuilder;
use AdvancedBillingLib\Models\Builders\PaymentProfileParamsBuilder;

$chjsTokenizationFailure = ChjsTokenizationFailureBuilder::init(
    'errors2'
)
    ->paymentProfileParams(
        PaymentProfileParamsBuilder::init()
            ->firstName('first_name2')
            ->lastName('last_name0')
            ->cardType('card_type2')
            ->build()
    )
    ->build();
```

