
# Contract

Contract linked to the scheduled renewal configuration.

## Structure

`Contract`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `maxioId` | `?string` | Optional | - | getMaxioId(): ?string | setMaxioId(?string maxioId): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `register` | [`?Register`](../../doc/models/register.md) | Optional | - | getRegister(): ?Register | setRegister(?Register register): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ContractBuilder;
use AdvancedBillingLib\Models\Builders\RegisterBuilder;

$contract = ContractBuilder::init()
    ->id(112)
    ->maxioId('maxio_id6')
    ->number('number2')
    ->register(
        RegisterBuilder::init()
            ->id(54)
            ->maxioId('maxio_id4')
            ->name('name2')
            ->currencyCode('currency_code2')
            ->build()
    )
    ->build();
```

