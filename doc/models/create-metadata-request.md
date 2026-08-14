
# Create Metadata Request

## Structure

`CreateMetadataRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | [`CreateMetadata[]`](../../doc/models/create-metadata.md) | Required | - | getMetadata(): array | setMetadata(array metadata): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateMetadataRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateMetadataBuilder;

$createMetadataRequest = CreateMetadataRequestBuilder::init(
    [
        CreateMetadataBuilder::init()
            ->name('name6')
            ->value('value8')
            ->build()
    ]
)->build();
```

