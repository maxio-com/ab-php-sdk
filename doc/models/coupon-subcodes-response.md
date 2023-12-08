
# Coupon Subcodes Response

## Structure

`CouponSubcodesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createdCodes` | `?(string[])` | Optional | - | getCreatedCodes(): ?array | setCreatedCodes(?array createdCodes): void |
| `duplicateCodes` | `?(string[])` | Optional | - | getDuplicateCodes(): ?array | setDuplicateCodes(?array duplicateCodes): void |
| `invalidCodes` | `?(string[])` | Optional | - | getInvalidCodes(): ?array | setInvalidCodes(?array invalidCodes): void |

## Example (as JSON)

```json
{
  "created_codes": [
    "created_codes1",
    "created_codes2"
  ],
  "duplicate_codes": [
    "duplicate_codes8",
    "duplicate_codes7"
  ],
  "invalid_codes": [
    "invalid_codes0",
    "invalid_codes9",
    "invalid_codes8"
  ]
}
```

