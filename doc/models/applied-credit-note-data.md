
# Applied Credit Note Data

## Structure

`AppliedCreditNoteData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | The UID of the credit note | getUid(): ?string | setUid(?string uid): void |
| `number` | `?string` | Optional | The number of the credit note | getNumber(): ?string | setNumber(?string number): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AppliedCreditNoteDataBuilder;

$appliedCreditNoteData = AppliedCreditNoteDataBuilder::init()
    ->uid('uid4')
    ->number('number2')
    ->build();
```

