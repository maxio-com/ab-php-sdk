
# List Invoices Response

## Structure

`ListInvoicesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoices` | [`Invoice[]`](../../doc/models/invoice.md) | Required | - | getInvoices(): array | setInvoices(array invoices): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListInvoicesResponseBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$listInvoicesResponse = ListInvoicesResponseBuilder::init(
    [
        InvoiceBuilder::init()
            ->id(196)
            ->uid('uid6')
            ->siteId(122)
            ->customerId(234)
            ->subscriptionId(50)
            ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
            ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
            ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
            ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
            ->build()
    ]
)->build();
```

