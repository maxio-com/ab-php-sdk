
# Update Payment Profile Request

## Structure

`UpdatePaymentProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`UpdatePaymentProfile`](../../doc/models/update-payment-profile.md) | Required | - | getPaymentProfile(): UpdatePaymentProfile | setPaymentProfile(UpdatePaymentProfile paymentProfile): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdatePaymentProfileRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdatePaymentProfileBuilder;
use AdvancedBillingLib\Models\CardType;

$updatePaymentProfileRequest = UpdatePaymentProfileRequestBuilder::init(
    UpdatePaymentProfileBuilder::init()
        ->firstName('first_name4')
        ->lastName('last_name2')
        ->fullNumber('5424000000000015')
        ->cardType(CardType::BOGUS)
        ->expirationMonth('expiration_month0')
        ->build()
)->build();
```

