
# Update Invoice Request

Request payload for updating a draft ad hoc invoice.

## Structure

`UpdateInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoice` | [`UpdateInvoice`](../../doc/models/update-invoice.md) | Required | Attributes of a draft ad hoc invoice which can be updated. Only the submitted attributes are changed. | getInvoice(): UpdateInvoice | setInvoice(UpdateInvoice invoice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateInvoiceRequestBuilder;
use AdvancedBillingLib\Models\Builders\UpdateInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\UpdateInvoiceItemBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$updateInvoiceRequest = UpdateInvoiceRequestBuilder::init(
    UpdateInvoiceBuilder::init()
        ->lineItems(
            [
                UpdateInvoiceItemBuilder::init()
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
                UpdateInvoiceItemBuilder::init()
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
                UpdateInvoiceItemBuilder::init()
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
        ->build()
)->build();
```

