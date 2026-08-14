
# Invoice Issued

## Structure

`InvoiceIssued`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `role` | `string` | Required | - | getRole(): string | setRole(string role): void |
| `dueDate` | `?DateTime` | Required | - | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `issueDate` | `string` | Required | Invoice issue date. Can be an empty string if value is missing. | getIssueDate(): string | setIssueDate(string issueDate): void |
| `paidDate` | `string` | Required | Paid date. Can be an empty string if value is missing. | getPaidDate(): string | setPaidDate(string paidDate): void |
| `dueAmount` | `string` | Required | - | getDueAmount(): string | setDueAmount(string dueAmount): void |
| `paidAmount` | `string` | Required | - | getPaidAmount(): string | setPaidAmount(string paidAmount): void |
| `taxAmount` | `string` | Required | - | getTaxAmount(): string | setTaxAmount(string taxAmount): void |
| `refundAmount` | `string` | Required | - | getRefundAmount(): string | setRefundAmount(string refundAmount): void |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `statusAmount` | `string` | Required | - | getStatusAmount(): string | setStatusAmount(string statusAmount): void |
| `productName` | `string` | Required | - | getProductName(): string | setProductName(string productName): void |
| `consolidationLevel` | `string` | Required | - | getConsolidationLevel(): string | setConsolidationLevel(string consolidationLevel): void |
| `lineItems` | [`InvoiceLineItemEventData[]`](../../doc/models/invoice-line-item-event-data.md) | Required | - | getLineItems(): array | setLineItems(array lineItems): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceIssuedBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceLineItemEventDataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$invoiceIssued = InvoiceIssuedBuilder::init(
    'uid8',
    'number4',
    'role8',
    'issue_date4',
    'paid_date8',
    'due_amount0',
    'paid_amount0',
    'tax_amount8',
    'refund_amount6',
    'total_amount4',
    'status_amount8',
    'product_name4',
    'consolidation_level0',
    [
        InvoiceLineItemEventDataBuilder::init()
            ->uid('uid8')
            ->title('title4')
            ->description('description8')
            ->quantity(102)
            ->quantityDelta(204)
            ->build()
    ]
)
    ->dueDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
    ->build();
```

