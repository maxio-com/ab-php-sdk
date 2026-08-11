
# Invoice Discount Breakout

## Structure

`InvoiceDiscountBreakout`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | - | getUid(): ?string | setUid(?string uid): void |
| `eligibleAmount` | `?string` | Optional | - | getEligibleAmount(): ?string | setEligibleAmount(?string eligibleAmount): void |
| `discountAmount` | `?string` | Optional | - | getDiscountAmount(): ?string | setDiscountAmount(?string discountAmount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceDiscountBreakoutBuilder;

$invoiceDiscountBreakout = InvoiceDiscountBreakoutBuilder::init()
    ->uid('uid0')
    ->eligibleAmount('eligible_amount2')
    ->discountAmount('discount_amount4')
    ->build();
```

