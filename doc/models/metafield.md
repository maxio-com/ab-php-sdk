
# Metafield

## Structure

`Metafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `dataCount` | `?int` | Optional | the amount of subscriptions this metafield has been applied to in Chargify | getDataCount(): ?int | setDataCount(?int dataCount): void |
| `inputType` | [`?string(MetafieldInput)`](../../doc/models/metafield-input.md) | Optional | Indicates how data should be added to the metafield. For example, a text type is just a string, so a given metafield of this type can have any value attached. On the other hand, dropdown and radio have a set of allowed values that can be input, and appear differently on a Public Signup Page. Defaults to 'text' | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | string\|string[]\|null | Optional | This is a container for one-of cases. | getEnum(): | setEnum( enum): void |

## Example (as JSON)

```json
{
  "id": 52,
  "name": "name8",
  "scope": {
    "csv": "0",
    "invoices": "0",
    "statements": "0",
    "portal": "0",
    "public_show": "0"
  },
  "data_count": 216,
  "input_type": "radio"
}
```

