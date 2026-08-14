
# Batch Job Response

## Structure

`BatchJobResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `batchjob` | [`BatchJob`](../../doc/models/batch-job.md) | Required | - | getBatchjob(): BatchJob | setBatchjob(BatchJob batchjob): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BatchJobResponseBuilder;
use AdvancedBillingLib\Models\Builders\BatchJobBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$batchJobResponse = BatchJobResponseBuilder::init(
    BatchJobBuilder::init()
        ->id(54)
        ->finishedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->rowCount(62)
        ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
        ->completed('completed4')
        ->build()
)->build();
```

