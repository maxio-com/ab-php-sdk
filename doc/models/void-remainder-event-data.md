
# Void Remainder Event Data

Example schema for an `void_remainder` event

## Structure

`VoidRemainderEventData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditNoteAttributes` | [`CreditNote`](../../doc/models/credit-note.md) | Required | - | getCreditNoteAttributes(): CreditNote | setCreditNoteAttributes(CreditNote creditNoteAttributes): void |
| `memo` | `string` | Required | The memo provided during invoice remainder voiding. | getMemo(): string | setMemo(string memo): void |
| `appliedAmount` | `string` | Required | The amount of the void. | getAppliedAmount(): string | setAppliedAmount(string appliedAmount): void |
| `transactionTime` | `DateTime` | Required | The time the refund was applied, in ISO 8601 format, i.e. "2019-06-07T17:20:06Z" | getTransactionTime(): \DateTime | setTransactionTime(\DateTime transactionTime): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\VoidRemainderEventDataBuilder;
use AdvancedBillingLib\Models\Builders\CreditNoteBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$voidRemainderEventData = VoidRemainderEventDataBuilder::init(
    CreditNoteBuilder::init()
        ->uid('uid2')
        ->siteId(72)
        ->customerId(184)
        ->subscriptionId(0)
        ->number('number0')
        ->build(),
    'memo6',
    'applied_amount6',
    DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
)->build();
```

