
# Update Segment Request

## Structure

`UpdateSegmentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segment` | [`UpdateSegment`](../../doc/models/update-segment.md) | Required | - | getSegment(): UpdateSegment | setSegment(UpdateSegment segment): void |

## Example (as JSON)

```json
{
  "segment": {
    "pricing_scheme": "stairstep",
    "prices": [
      {
        "starting_quantity": 64,
        "ending_quantity": 38,
        "unit_price": "String3"
      },
      {
        "starting_quantity": 64,
        "ending_quantity": 38,
        "unit_price": "String3"
      },
      {
        "starting_quantity": 64,
        "ending_quantity": 38,
        "unit_price": "String3"
      }
    ]
  }
}
```

