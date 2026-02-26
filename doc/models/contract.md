
# Contract

Contract linked to the scheduled renewal configuration.

## Structure

`Contract`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `maxioId` | `?string` | Optional | - | getMaxioId(): ?string | setMaxioId(?string maxioId): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `register` | [`?Register`](../../doc/models/register.md) | Optional | - | getRegister(): ?Register | setRegister(?Register register): void |

## Example (as JSON)

```json
{
  "id": 136,
  "maxio_id": "maxio_id8",
  "number": "number6",
  "register": {
    "id": 54,
    "maxio_id": "maxio_id4",
    "name": "name2",
    "currency_code": "currency_code2"
  }
}
```

