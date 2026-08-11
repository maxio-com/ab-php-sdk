
# Payment Method External

## Structure

`PaymentMethodExternal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `details` | `?string` | Required | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `string` | Required | - | getKind(): string | setKind(string kind): void |
| `memo` | `?string` | Required | - | getMemo(): ?string | setMemo(?string memo): void |
| `type` | [`string(InvoiceEventPaymentMethod)`](../../doc/models/invoice-event-payment-method.md) | Required | - | getType(): string | setType(string type): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentMethodExternalBuilder;
use AdvancedBillingLib\Models\InvoiceEventPaymentMethod;

$paymentMethodExternal = PaymentMethodExternalBuilder::init(
    'kind8',
    InvoiceEventPaymentMethod::EXTERNAL
)
    ->details('details0')
    ->memo('memo4')
    ->build();
```

