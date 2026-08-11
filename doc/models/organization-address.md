
# Organization Address

## Structure

`OrganizationAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | - | getStreet(): ?string | setStreet(?string street): void |
| `line2` | `?string` | Optional | - | getLine2(): ?string | setLine2(?string line2): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `zip` | `?string` | Optional | - | getZip(): ?string | setZip(?string zip): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OrganizationAddressBuilder;

$organizationAddress = OrganizationAddressBuilder::init()
    ->street('street2')
    ->line2('line26')
    ->city('city2')
    ->state('state8')
    ->zip('zip6')
    ->build();
```

