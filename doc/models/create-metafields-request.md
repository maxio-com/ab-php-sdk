
# Create Metafields Request

## Structure

`CreateMetafieldsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metafields` | [CreateMetafield](../../doc/models/create-metafield.md)\|[CreateMetafield](../../doc/models/create-metafield.md)[] | Required | This is a container for one-of cases. | getMetafields(): | setMetafields( metafields): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMetafieldsRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateMetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$createMetafieldsRequest = CreateMetafieldsRequestBuilder::init(
    CreateMetafieldBuilder::init()
        ->name('my_field')
        ->scope(
            MetafieldScopeBuilder::init()
                ->csv(IncludeOption::EXCLUDE)
                ->invoices(IncludeOption::EXCLUDE)
                ->statements(IncludeOption::EXCLUDE)
                ->portal(IncludeOption::EXCLUDE)
                ->publicShow(IncludeOption::EXCLUDE)
                ->publicEdit(IncludeOption::EXCLUDE)
                ->build()
        )
        ->inputType(MetafieldInput::TEXT)
        ->enum(
            [
                'string'
            ]
        )
        ->build()
)->build();
```

