
# Allocate Components

## Structure

`AllocateComponents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prorationUpgradeScheme` | `?string` | Optional | - | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `prorationDowngradeScheme` | `?string` | Optional | - | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `allocations` | [`?(CreateAllocation[])`](../../doc/models/create-allocation.md) | Optional | - | getAllocations(): ?array | setAllocations(?array allocations): void |
| `accrueCharge` | `?bool` | Optional | - | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `paymentCollectionMethod` | [`?string(CollectionMethod)`](../../doc/models/collection-method.md) | Optional | (Optional) If not passed, the allocation(s) will use the payment collection method on the subscription. | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `initiateDunning` | `?bool` | Optional | If true, if the immediate component payment fails, initiate dunning for the subscription.<br>Otherwise, leave the charges on the subscription to pay for at renewal. | getInitiateDunning(): ?bool | setInitiateDunning(?bool initiateDunning): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AllocateComponentsBuilder;
use AdvancedBillingLib\Models\Builders\CreateAllocationBuilder;
use AdvancedBillingLib\Models\CreditType;

$allocateComponents = AllocateComponentsBuilder::init()
    ->prorationUpgradeScheme('proration_upgrade_scheme8')
    ->prorationDowngradeScheme('proration_downgrade_scheme6')
    ->allocations(
        [
            CreateAllocationBuilder::init(
                26.48
            )
                ->decimalQuantity('decimal_quantity8')
                ->previousQuantity(55.5)
                ->decimalPreviousQuantity('decimal_previous_quantity2')
                ->componentId(242)
                ->memo('memo6')
                ->build(),
            CreateAllocationBuilder::init(
                26.48
            )
                ->decimalQuantity('decimal_quantity8')
                ->previousQuantity(55.5)
                ->decimalPreviousQuantity('decimal_previous_quantity2')
                ->componentId(242)
                ->memo('memo6')
                ->build(),
            CreateAllocationBuilder::init(
                26.48
            )
                ->decimalQuantity('decimal_quantity8')
                ->previousQuantity(55.5)
                ->decimalPreviousQuantity('decimal_previous_quantity2')
                ->componentId(242)
                ->memo('memo6')
                ->build()
        ]
    )
    ->accrueCharge(false)
    ->upgradeCharge(CreditType::PRORATED)
    ->build();
```

