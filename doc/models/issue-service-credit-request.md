
# Issue Service Credit Request

## Structure

`IssueServiceCreditRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceCredit` | [`IssueServiceCredit`](../../doc/models/issue-service-credit.md) | Required | - | getServiceCredit(): IssueServiceCredit | setServiceCredit(IssueServiceCredit serviceCredit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\IssueServiceCreditRequestBuilder;
use AdvancedBillingLib\Models\Builders\IssueServiceCreditBuilder;

$issueServiceCreditRequest = IssueServiceCreditRequestBuilder::init(
    IssueServiceCreditBuilder::init(
        31.42
    )
        ->memo('memo0')
        ->build()
)->build();
```

