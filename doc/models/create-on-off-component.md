
# Create On Off Component

## Structure

`CreateOnOffComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `onOffComponent` | [`OnOffComponent`](../../doc/models/on-off-component.md) | Required | - | getOnOffComponent(): OnOffComponent | setOnOffComponent(OnOffComponent onOffComponent): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOnOffComponentBuilder;
use AdvancedBillingLib\Models\Builders\OnOffComponentBuilder;
use AdvancedBillingLib\Models\CreditType;

$createOnOffComponent = CreateOnOffComponentBuilder::init(
    OnOffComponentBuilder::init(
        'name6',
        'String5'
    )
        ->description('description6')
        ->handle('handle2')
        ->taxable(false)
        ->upgradeCharge(CreditType::FULL)
        ->downgradeCredit(CreditType::FULL)
        ->build()
)->build();
```

