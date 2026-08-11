
# Invoice Payment Method

## Structure

`InvoicePaymentMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `details` | `?string` | Optional | - | getDetails(): ?string | setDetails(?string details): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `cardBrand` | `?string` | Optional | - | getCardBrand(): ?string | setCardBrand(?string cardBrand): void |
| `cardExpiration` | `?string` | Optional | - | getCardExpiration(): ?string | setCardExpiration(?string cardExpiration): void |
| `lastFour` | `?string` | Optional | - | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `maskedCardNumber` | `?string` | Optional | - | getMaskedCardNumber(): ?string | setMaskedCardNumber(?string maskedCardNumber): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoicePaymentMethodBuilder;

$invoicePaymentMethod = InvoicePaymentMethodBuilder::init()
    ->details('details2')
    ->kind('kind0')
    ->memo('memo6')
    ->type('type8')
    ->cardBrand('card_brand4')
    ->build();
```

