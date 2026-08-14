
# List Metafields Response

## Structure

`ListMetafieldsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `metafields` | [`?(Metafield[])`](../../doc/models/metafield.md) | Optional | - | getMetafields(): ?array | setMetafields(?array metafields): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListMetafieldsResponseBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldBuilder;
use AdvancedBillingLib\Models\Builders\MetafieldScopeBuilder;
use AdvancedBillingLib\Models\IncludeOption;
use AdvancedBillingLib\Models\MetafieldInput;

$listMetafieldsResponse = ListMetafieldsResponseBuilder::init()
    ->totalCount(228)
    ->currentPage(204)
    ->totalPages(216)
    ->perPage(74)
    ->metafields(
        [
            MetafieldBuilder::init()
                ->id(22)
                ->name('name2')
                ->scope(
                    MetafieldScopeBuilder::init()
                        ->csv(IncludeOption::EXCLUDE)
                        ->invoices(IncludeOption::EXCLUDE)
                        ->statements(IncludeOption::EXCLUDE)
                        ->portal(IncludeOption::EXCLUDE)
                        ->publicShow(IncludeOption::EXCLUDE)
                        ->build()
                )
                ->dataCount(10)
                ->inputType(MetafieldInput::BALANCE_TRACKER)
                ->build(),
            MetafieldBuilder::init()
                ->id(22)
                ->name('name2')
                ->scope(
                    MetafieldScopeBuilder::init()
                        ->csv(IncludeOption::EXCLUDE)
                        ->invoices(IncludeOption::EXCLUDE)
                        ->statements(IncludeOption::EXCLUDE)
                        ->portal(IncludeOption::EXCLUDE)
                        ->publicShow(IncludeOption::EXCLUDE)
                        ->build()
                )
                ->dataCount(10)
                ->inputType(MetafieldInput::BALANCE_TRACKER)
                ->build(),
            MetafieldBuilder::init()
                ->id(22)
                ->name('name2')
                ->scope(
                    MetafieldScopeBuilder::init()
                        ->csv(IncludeOption::EXCLUDE)
                        ->invoices(IncludeOption::EXCLUDE)
                        ->statements(IncludeOption::EXCLUDE)
                        ->portal(IncludeOption::EXCLUDE)
                        ->publicShow(IncludeOption::EXCLUDE)
                        ->build()
                )
                ->dataCount(10)
                ->inputType(MetafieldInput::BALANCE_TRACKER)
                ->build()
        ]
    )
    ->build();
```

