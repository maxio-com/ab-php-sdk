
# Proforma Invoice Payment

## Structure

`ProformaInvoicePayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `memo` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `prepayment` | `?bool` | Optional | - | getPrepayment(): ?bool | setPrepayment(?bool prepayment): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProformaInvoicePaymentBuilder;

$proformaInvoicePayment = ProformaInvoicePaymentBuilder::init()
    ->memo('memo2')
    ->originalAmount('original_amount2')
    ->appliedAmount('applied_amount0')
    ->prepayment(false)
    ->build();
```

