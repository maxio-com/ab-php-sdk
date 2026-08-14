
# Batch Job

## Structure

`BatchJob`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `finishedAt` | `?DateTime` | Optional | - | getFinishedAt(): ?\DateTime | setFinishedAt(?\DateTime finishedAt): void |
| `rowCount` | `?int` | Optional | - | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `completed` | `?string` | Optional | - | getCompleted(): ?string | setCompleted(?string completed): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\BatchJobBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$batchJob = BatchJobBuilder::init()
    ->id(60)
    ->finishedAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->rowCount(68)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->completed('completed6')
    ->build();
```

