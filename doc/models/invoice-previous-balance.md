
# Invoice Previous Balance

## Structure

`InvoicePreviousBalance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `capturedAt` | `?DateTime` | Optional | - | getCapturedAt(): ?\DateTime | setCapturedAt(?\DateTime capturedAt): void |
| `invoices` | [`?(InvoiceBalanceItem[])`](../../doc/models/invoice-balance-item.md) | Optional | - | getInvoices(): ?array | setInvoices(?array invoices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoicePreviousBalanceBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceBalanceItemBuilder;

$invoicePreviousBalance = InvoicePreviousBalanceBuilder::init()
    ->capturedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->invoices(
        [
            InvoiceBalanceItemBuilder::init()
                ->uid('uid6')
                ->number('number6')
                ->outstandingAmount('outstanding_amount8')
                ->build(),
            InvoiceBalanceItemBuilder::init()
                ->uid('uid6')
                ->number('number6')
                ->outstandingAmount('outstanding_amount8')
                ->build(),
            InvoiceBalanceItemBuilder::init()
                ->uid('uid6')
                ->number('number6')
                ->outstandingAmount('outstanding_amount8')
                ->build()
        ]
    )
    ->build();
```

