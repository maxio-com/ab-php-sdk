
# Allocation Settings

## Structure

`AllocationSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `accrueCharge` | `?string` | Optional | Either "true" or "false". | getAccrueCharge(): ?string | setAccrueCharge(?string accrueCharge): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AllocationSettingsBuilder;
use AdvancedBillingLib\Models\CreditType;

$allocationSettings = AllocationSettingsBuilder::init()
    ->upgradeCharge(CreditType::PRORATED)
    ->downgradeCredit(CreditType::PRORATED)
    ->accrueCharge('accrue_charge2')
    ->build();
```

