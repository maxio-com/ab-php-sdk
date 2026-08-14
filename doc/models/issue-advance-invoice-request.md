
# Issue Advance Invoice Request

## Structure

`IssueAdvanceInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `force` | `?bool` | Optional | - | getForce(): ?bool | setForce(?bool force): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\IssueAdvanceInvoiceRequestBuilder;

$issueAdvanceInvoiceRequest = IssueAdvanceInvoiceRequestBuilder::init()
    ->force(false)
    ->build();
```

