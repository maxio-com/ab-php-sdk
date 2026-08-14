
# Invoice Balance Item

## Structure

`InvoiceBalanceItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `outstandingAmount` | `?string` | Optional | - | getOutstandingAmount(): ?string | setOutstandingAmount(?string outstandingAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceBalanceItemBuilder;

$invoiceBalanceItem = InvoiceBalanceItemBuilder::init()
    ->uid('uid8')
    ->number('number6')
    ->outstandingAmount('outstanding_amount6')
    ->build();
```

