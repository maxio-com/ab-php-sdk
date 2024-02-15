
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

## Example (as JSON)

```json
{
  "id": 246,
  "finished_at": "2016-03-13T12:52:32.123Z",
  "row_count": 254,
  "created_at": "2016-03-13T12:52:32.123Z",
  "completed": "completed0"
}
```

