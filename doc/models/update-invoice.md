
# Update Invoice

Attributes of a draft ad hoc invoice which can be updated. Only the submitted attributes are changed.

## Structure

`UpdateInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lineItems` | [`?(UpdateInvoiceItem[])`](../../doc/models/update-invoice-item.md) | Optional | Line item changes to apply. Line items without a `uid` are added, line items with a `uid` are updated, and line items with a `uid` and `_destroy` set to `true` are removed. Existing line items not referenced in the array remain unchanged. | getLineItems(): ?array | setLineItems(?array lineItems): void |
| `issueDate` | `?DateTime` | Optional | New issue date for the invoice (format YYYY-MM-DD). This date is interpreted and validated in your site's time zone. It must be today or a date in the past — future dates are not accepted. The due date is recalculated from the issue date and net terms. | getIssueDate(): ?\DateTime | setIssueDate(?\DateTime issueDate): void |
| `netTerms` | `?int` | Optional | Number of days after the issue date on which the invoice is due. The due date is recalculated when net terms or the issue date change. | getNetTerms(): ?int | setNetTerms(?int netTerms): void |
| `paymentInstructions` | `?string` | Optional | Custom payment instructions displayed on the invoice. | getPaymentInstructions(): ?string | setPaymentInstructions(?string paymentInstructions): void |
| `memo` | `?string` | Optional | A custom memo displayed on the invoice. | getMemo(): ?string | setMemo(?string memo): void |
| `sellerAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Replaces the seller address on the invoice | getSellerAddress(): ?CreateInvoiceAddress | setSellerAddress(?CreateInvoiceAddress sellerAddress): void |
| `billingAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Replaces the billing address on the invoice | getBillingAddress(): ?CreateInvoiceAddress | setBillingAddress(?CreateInvoiceAddress billingAddress): void |
| `shippingAddress` | [`?CreateInvoiceAddress`](../../doc/models/create-invoice-address.md) | Optional | Replaces the shipping address on the invoice | getShippingAddress(): ?CreateInvoiceAddress | setShippingAddress(?CreateInvoiceAddress shippingAddress): void |
| `coupons` | [`?(CreateInvoiceCoupon[])`](../../doc/models/create-invoice-coupon.md) | Optional | When present, replaces all discounts currently applied to the invoice. Send an empty array to remove all discounts. | getCoupons(): ?array | setCoupons(?array coupons): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\UpdateInvoiceItemBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$updateInvoice = UpdateInvoiceBuilder::init()
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
                ->build()
        ]
    )
    ->issueDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
    ->netTerms(46)
    ->paymentInstructions('payment_instructions6')
    ->memo('memo2')
    ->build();
```

