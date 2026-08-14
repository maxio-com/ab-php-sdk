
# Invoice Response

## Structure

`InvoiceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoice` | [`Invoice`](../../doc/models/invoice.md) | Required | - | getInvoice(): Invoice | setInvoice(Invoice invoice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceResponseBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$invoiceResponse = InvoiceResponseBuilder::init(
    InvoiceBuilder::init()
        ->id(166)
        ->uid('uid6')
        ->siteId(92)
        ->customerId(204)
        ->subscriptionId(20)
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->dueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->paidDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->publicUrlExpiresOn(DateTimeHelper::fromSimpleDate('2024-01-21'))
        ->build()
)->build();
```

