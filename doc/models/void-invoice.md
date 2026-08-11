
# Void Invoice

## Structure

`VoidInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getReason(): string | setReason(string reason): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\VoidInvoiceBuilder;

$voidInvoice = VoidInvoiceBuilder::init(
    'reason8'
)->build();
```

