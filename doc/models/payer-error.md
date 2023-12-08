
# Payer Error

## Structure

`PayerError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastName` | `?(string[])` | Optional | - | getLastName(): ?array | setLastName(?array lastName): void |
| `firstName` | `?(string[])` | Optional | - | getFirstName(): ?array | setFirstName(?array firstName): void |
| `email` | `?(string[])` | Optional | - | getEmail(): ?array | setEmail(?array email): void |

## Example (as JSON)

```json
{
  "last_name": [
    "last_name1",
    "last_name2",
    "last_name3"
  ],
  "first_name": [
    "first_name4",
    "first_name5"
  ],
  "email": [
    "email4"
  ]
}
```

