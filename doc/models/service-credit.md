
# Service Credit

## Structure

`ServiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `amountInCents` | `?int` | Optional | The amount in cents of the entry | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `endingBalanceInCents` | `?int` | Optional | The new balance for the credit account | getEndingBalanceInCents(): ?int | setEndingBalanceInCents(?int endingBalanceInCents): void |
| `entryType` | [`?string(ServiceCreditType)`](../../doc/models/service-credit-type.md) | Optional | The type of entry | getEntryType(): ?string | setEntryType(?string entryType): void |
| `memo` | `?string` | Optional | The memo attached to the entry | getMemo(): ?string | setMemo(?string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ServiceCreditBuilder;
use AdvancedBillingLib\Models\ServiceCreditType;

$serviceCredit = ServiceCreditBuilder::init()
    ->id(132)
    ->amountInCents(218)
    ->endingBalanceInCents(2)
    ->entryType(ServiceCreditType::CREDIT)
    ->memo('memo8')
    ->build();
```

