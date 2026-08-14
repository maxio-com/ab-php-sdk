
# Issue Service Credit

## Structure

`IssueServiceCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | float\|string | Required | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\IssueServiceCreditBuilder;

$issueServiceCredit = IssueServiceCreditBuilder::init(
    44.88
)
    ->memo('memo6')
    ->build();
```

