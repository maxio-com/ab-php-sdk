
# List Public Keys Meta

## Structure

`ListPublicKeysMeta`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListPublicKeysMetaBuilder;

$listPublicKeysMeta = ListPublicKeysMetaBuilder::init()
    ->totalCount(232)
    ->currentPage(208)
    ->totalPages(220)
    ->perPage(70)
    ->build();
```

