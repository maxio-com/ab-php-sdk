
# Invoice Payer Change

## Structure

`InvoicePayerChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoicePayerChangeBuilder;

$invoicePayerChange = InvoicePayerChangeBuilder::init()
    ->firstName('first_name4')
    ->lastName('last_name2')
    ->organization('organization2')
    ->email('email2')
    ->build();
```

