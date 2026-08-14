
# Create Invoice Request

## Structure

`CreateInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoice` | [`CreateInvoice`](../../doc/models/create-invoice.md) | Required | - | getInvoice(): CreateInvoice | setInvoice(CreateInvoice invoice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateInvoiceRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoiceItemBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\CreateInvoiceStatus;

$createInvoiceRequest = CreateInvoiceRequestBuilder::init(
    CreateInvoiceBuilder::init()
        ->lineItems(
            [
                CreateInvoiceItemBuilder::init()
                    ->title('title4')
                    ->quantity(
                        56.68
                    )
                    ->unitPrice(
                        39.9
                    )
                    ->taxable(false)
                    ->taxCode('tax_code6')
                    ->build(),
                CreateInvoiceItemBuilder::init()
                    ->title('title4')
                    ->quantity(
                        56.68
                    )
                    ->unitPrice(
                        39.9
                    )
                    ->taxable(false)
                    ->taxCode('tax_code6')
                    ->build(),
                CreateInvoiceItemBuilder::init()
                    ->title('title4')
                    ->quantity(
                        56.68
                    )
                    ->unitPrice(
                        39.9
                    )
                    ->taxable(false)
                    ->taxCode('tax_code6')
                    ->build()
            ]
        )
        ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->netTerms(144)
        ->paymentInstructions('payment_instructions6')
        ->memo('memo0')
        ->status(CreateInvoiceStatus::DRAFT)
        ->build()
)->build();
```

