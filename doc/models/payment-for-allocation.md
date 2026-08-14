
# Payment for Allocation

Information for captured payment, if applicable

## Structure

`PaymentForAllocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `success` | `?bool` | Optional | - | getSuccess(): ?bool | setSuccess(?bool success): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentForAllocationBuilder;

$paymentForAllocation = PaymentForAllocationBuilder::init()
    ->id(68)
    ->amountInCents(102)
    ->success(false)
    ->memo('memo6')
    ->build();
```

