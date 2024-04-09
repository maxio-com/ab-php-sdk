
# List Segments Filter

## Structure

`ListSegmentsFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segmentProperty1Value` | `?string` | Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_1` on attached Metric. If empty string is passed, this filter would be rejected. Use in query `filter[segment_property_1_value]=EU`. | getSegmentProperty1Value(): ?string | setSegmentProperty1Value(?string segmentProperty1Value): void |
| `segmentProperty2Value` | `?string` | Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_2` on attached Metric. If empty string is passed, this filter would be rejected. | getSegmentProperty2Value(): ?string | setSegmentProperty2Value(?string segmentProperty2Value): void |
| `segmentProperty3Value` | `?string` | Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_3` on attached Metric. If empty string is passed, this filter would be rejected. | getSegmentProperty3Value(): ?string | setSegmentProperty3Value(?string segmentProperty3Value): void |
| `segmentProperty4Value` | `?string` | Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_4` on attached Metric. If empty string is passed, this filter would be rejected. | getSegmentProperty4Value(): ?string | setSegmentProperty4Value(?string segmentProperty4Value): void |

## Example (as JSON)

```json
{
  "segment_property_1_value": "EU",
  "segment_property_2_value": "segment_property_2_value4",
  "segment_property_3_value": "segment_property_3_value2",
  "segment_property_4_value": "segment_property_4_value6"
}
```

