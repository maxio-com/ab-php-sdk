
# Register

## Structure

`Register`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `maxioId` | `?string` | Optional | - | getMaxioId(): ?string | setMaxioId(?string maxioId): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `currencyCode` | `?string` | Optional | The ISO 4217 currency code (3 character string) representing the currency of an invoice transaction. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RegisterBuilder;

$register = RegisterBuilder::init()
    ->id(54)
    ->maxioId('maxio_id4')
    ->name('name2')
    ->currencyCode('currency_code2')
    ->build();
```

