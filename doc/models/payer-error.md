
# Payer Error

## Structure

`PayerError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastName` | `?(string[])` | Optional | - | getLastName(): ?array | setLastName(?array lastName): void |
| `firstName` | `?(string[])` | Optional | - | getFirstName(): ?array | setFirstName(?array firstName): void |
| `email` | `?(string[])` | Optional | - | getEmail(): ?array | setEmail(?array email): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PayerErrorBuilder;

$payerError = PayerErrorBuilder::init()
    ->lastName(
        [
            'last_name9'
        ]
    )
    ->firstName(
        [
            'first_name2',
            'first_name3',
            'first_name4'
        ]
    )
    ->email(
        [
            'email6',
            'email7',
            'email8'
        ]
    )
    ->build();
```

