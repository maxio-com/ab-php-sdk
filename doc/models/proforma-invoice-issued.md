
# Proforma Invoice Issued

## Structure

`ProformaInvoiceIssued`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `string` | Required | - | getUid(): string | setUid(string uid): void |
| `number` | `string` | Required | - | getNumber(): string | setNumber(string number): void |
| `role` | `string` | Required | - | getRole(): string | setRole(string role): void |
| `deliveryDate` | `DateTime` | Required | - | getDeliveryDate(): \DateTime | setDeliveryDate(\DateTime deliveryDate): void |
| `createdAt` | `DateTime` | Required | - | getCreatedAt(): \DateTime | setCreatedAt(\DateTime createdAt): void |
| `dueAmount` | `string` | Required | - | getDueAmount(): string | setDueAmount(string dueAmount): void |
| `paidAmount` | `string` | Required | - | getPaidAmount(): string | setPaidAmount(string paidAmount): void |
| `taxAmount` | `string` | Required | - | getTaxAmount(): string | setTaxAmount(string taxAmount): void |
| `totalAmount` | `string` | Required | - | getTotalAmount(): string | setTotalAmount(string totalAmount): void |
| `productName` | `string` | Required | - | getProductName(): string | setProductName(string productName): void |
| `lineItems` | [`InvoiceLineItemEventData[]`](../../doc/models/invoice-line-item-event-data.md) | Required | - | getLineItems(): array | setLineItems(array lineItems): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProformaInvoiceIssuedBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\InvoiceLineItemEventDataBuilder;

$proformaInvoiceIssued = ProformaInvoiceIssuedBuilder::init(
    'uid6',
    'number4',
    'role0',
    DateTimeHelper::fromSimpleDateRequired('2016-03-13'),
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
    'due_amount8',
    'paid_amount8',
    'tax_amount0',
    'total_amount2',
    'product_name2',
    [
        InvoiceLineItemEventDataBuilder::init()
            ->uid('uid8')
            ->title('title4')
            ->description('description8')
            ->quantity(102)
            ->quantityDelta(204)
            ->build()
    ]
)->build();
```

