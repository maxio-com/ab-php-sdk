
# Product Price Point Errors

## Structure

`ProductPricePointErrors`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | `?string` | Optional | - | getPricePoint(): ?string | setPricePoint(?string pricePoint): void |
| `interval` | `?(string[])` | Optional | - | getInterval(): ?array | setInterval(?array interval): void |
| `intervalUnit` | `?(string[])` | Optional | - | getIntervalUnit(): ?array | setIntervalUnit(?array intervalUnit): void |
| `name` | `?(string[])` | Optional | - | getName(): ?array | setName(?array name): void |
| `price` | `?(string[])` | Optional | - | getPrice(): ?array | setPrice(?array price): void |
| `priceInCents` | `?(string[])` | Optional | - | getPriceInCents(): ?array | setPriceInCents(?array priceInCents): void |

## Example (as JSON)

```json
{
  "price_point": "can't be blank",
  "interval": [
    "Recurring Interval: cannot be blank.",
    "Recurring Interval: must be greater than or equal to 1."
  ],
  "interval_unit": [
    "Interval unit: cannot be blank.",
    "Interval unit: must be 'month' or 'day'."
  ],
  "name": [
    "Name: cannot be blank."
  ],
  "price": [
    "Price: is not a number.",
    "Price: must be greater than or equal to 0."
  ],
  "price_in_cents": [
    "Price in cents: cannot be blank."
  ]
}
```

