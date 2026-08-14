
# Update Metadata Request

## Structure

`UpdateMetadataRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | [`?UpdateMetadata`](../../doc/models/update-metadata.md) | Optional | - | getMetadata(): ?UpdateMetadata | setMetadata(?UpdateMetadata metadata): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateMetadataRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateMetadataBuilder;

$updateMetadataRequest = UpdateMetadataRequestBuilder::init()
    ->metadata(
        UpdateMetadataBuilder::init()
            ->currentName('current_name0')
            ->name('name6')
            ->value('value8')
            ->build()
    )
    ->build();
```

