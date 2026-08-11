
# Payment Method Credit Card

## Structure

`PaymentMethodCreditCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardBrand` | `string` | Required | - | getCardBrand(): string | setCardBrand(string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `string` | Required | - | getMaskedCardNumber(): string | setMaskedCardNumber(string maskedCardNumber): void |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentMethodCreditCardBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$paymentMethodCreditCard = PaymentMethodCreditCardBuilder::init(
    'card_brand4',
    'masked_card_number0',
    InvoiceEventPaymentMethod::CREDIT_CARD
)
    ->cardExpiration('card_expiration2')
    ->lastFour('last_four6')
    ->build();
```

