
# Invoice Payer

## Structure

`InvoicePayer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyId` | `?int` | Optional | - | getChargifyId(): ?int | setChargifyId(?int chargifyId): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `vatNumber` | `?string` | Optional | - | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoicePayerBuilder;

$invoicePayer = InvoicePayerBuilder::init()
    ->chargifyId(198)
    ->firstName('first_name2')
    ->lastName('last_name0')
    ->organization('organization4')
    ->email('email4')
    ->build();
```

