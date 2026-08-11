
# Paginated Metadata

## Structure

`PaginatedMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalCount` | `?int` | Optional | - | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `currentPage` | `?int` | Optional | - | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `totalPages` | `?int` | Optional | - | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `perPage` | `?int` | Optional | - | getPerPage(): ?int | setPerPage(?int perPage): void |
| `metadata` | [`?(Metadata[])`](../../doc/models/metadata.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaginatedMetadataBuilder;
use AdvancedBillingLib\Models\Builders\MetadataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$paginatedMetadata = PaginatedMetadataBuilder::init()
    ->totalCount(166)
    ->currentPage(142)
    ->totalPages(154)
    ->perPage(136)
    ->metadata(
        [
            MetadataBuilder::init()
                ->id(50)
                ->value('value8')
                ->resourceId(134)
                ->name('name6')
                ->deletedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                ->build()
        ]
    )
    ->build();
```

