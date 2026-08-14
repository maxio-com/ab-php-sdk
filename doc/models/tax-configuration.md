
# Tax Configuration

## Structure

`TaxConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | [`?string(TaxConfigurationKind)`](../../doc/models/tax-configuration-kind.md) | Optional | **Default**: `TaxConfigurationKind::CUSTOM` | getKind(): ?string | setKind(?string kind): void |
| `destinationAddress` | [`?string(TaxDestinationAddress)`](../../doc/models/tax-destination-address.md) | Optional | - | getDestinationAddress(): ?string | setDestinationAddress(?string destinationAddress): void |
| `fullyConfigured` | `?bool` | Optional | Returns `true` when Chargify has been properly configured to charge tax using the specified tax system. More details about taxes: https://maxio.zendesk.com/hc/en-us/articles/24287012608909-Taxes-Overview<br><br>**Default**: `false` | getFullyConfigured(): ?bool | setFullyConfigured(?bool fullyConfigured): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\TaxConfigurationBuilder;
use AdvancedBillingLib\Models\TaxConfigurationKind;
use AdvancedBillingLib\Models\TaxDestinationAddress;

$taxConfiguration = TaxConfigurationBuilder::init()
    ->kind(TaxConfigurationKind::CUSTOM)
    ->destinationAddress(TaxDestinationAddress::SHIPPING_ONLY)
    ->fullyConfigured(false)
    ->build();
```

