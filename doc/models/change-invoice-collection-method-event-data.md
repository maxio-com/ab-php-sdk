
# Change Invoice Collection Method Event Data

Example schema for an `change_invoice_collection_method` event

## Structure

`ChangeInvoiceCollectionMethodEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fromCollectionMethod` | `string` | Required | The previous collection method of the invoice. | getFromCollectionMethod(): string | setFromCollectionMethod(string fromCollectionMethod): void |
| `toCollectionMethod` | `string` | Required | The new collection method of the invoice. | getToCollectionMethod(): string | setToCollectionMethod(string toCollectionMethod): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChangeInvoiceCollectionMethodEventDataBuilder;

$changeInvoiceCollectionMethodEventData = ChangeInvoiceCollectionMethodEventDataBuilder::init(
    'from_collection_method8',
    'to_collection_method4'
)->build();
```

