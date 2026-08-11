
# Update Metafields Request

## Structure

`UpdateMetafieldsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metafields` | [UpdateMetafield](../../doc/models/update-metafield.md)\|[UpdateMetafield](../../doc/models/update-metafield.md)[]\|null | Optional | This is a container for one-of cases. | getMetafields(): | setMetafields( metafields): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateMetafieldsRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateMetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$updateMetafieldsRequest = UpdateMetafieldsRequestBuilder::init()
    ->metafields(
        UpdateMetafieldBuilder::init()
            ->currentName('current_name0')
            ->name('name6')
            ->scope(
                MetafieldScopeBuilder::init()
                    ->csv(IncludeOption::EXCLUDE)
                    ->invoices(IncludeOption::EXCLUDE)
                    ->statements(IncludeOption::EXCLUDE)
                    ->portal(IncludeOption::EXCLUDE)
                    ->publicShow(IncludeOption::EXCLUDE)
                    ->build()
            )
            ->inputType(MetafieldInput::BALANCE_TRACKER)
            ->enum(
                [
                    'enum2'
                ]
            )
            ->build()
    )
    ->build();
```

