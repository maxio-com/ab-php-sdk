
# Create Invoice Address

Overrides the default address.

## Structure

`CreateInvoiceAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | - | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | - | getLastName(): ?string | setLastName(?string lastName): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |
| `address` | `?string` | Optional | - | getAddress(): ?string | setAddress(?string address): void |
| `address2` | `?string` | Optional | - | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `zip` | `?string` | Optional | - | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateInvoiceAddressBuilder;

$createInvoiceAddress = CreateInvoiceAddressBuilder::init()
    ->firstName('first_name6')
    ->lastName('last_name4')
    ->phone('phone4')
    ->address('address2')
    ->address2('address_20')
    ->build();
```

