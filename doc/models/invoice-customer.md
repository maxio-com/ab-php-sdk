
# Invoice Customer

Information about the customer who is owner or recipient of the invoiced subscription.

## Structure

`InvoiceCustomer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyId` | `?int` | Optional | - | getChargifyId(): ?int | setChargifyId(?int chargifyId): void |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `organization` | `?string` | Optional | - | getOrganization(): ?string | setOrganization(?string organization): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `vatNumber` | `?string` | Optional | - | getVatNumber(): ?string | setVatNumber(?string vatNumber): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceCustomerBuilder;

$invoiceCustomer = InvoiceCustomerBuilder::init()
    ->chargifyId(82)
    ->firstName('first_name2')
    ->lastName('last_name0')
    ->organization('organization6')
    ->email('email4')
    ->build();
```

