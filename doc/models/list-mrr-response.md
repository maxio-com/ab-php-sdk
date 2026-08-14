
# List MRR Response

## Structure

`ListMRRResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mrr` | [`ListMRRResponseResult`](../../doc/models/list-mrr-response-result.md) | Required | - | getMrr(): ListMRRResponseResult | setMrr(ListMRRResponseResult mrr): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListMRRResponseBuilder;
use AdvancedBillingLib\Models\Builders\ListMRRResponseResultBuilder;

$listMRRResponse = ListMRRResponseBuilder::init(
    ListMRRResponseResultBuilder::init()
        ->page(30)
        ->perPage(198)
        ->totalPages(92)
        ->totalEntries(188)
        ->currency('currency4')
        ->build()
)->build();
```

