
# Create Metafield

## Structure

`CreateMetafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `inputType` | [`?string(MetafieldInput)`](../../doc/models/metafield-input.md) | Optional | Indicates how data should be added to the metafield. For example, a text type is just a string, so a given metafield of this type can have any value attached. On the other hand, dropdown and radio have a set of allowed values that can be input, and appear differently on a Public Signup Page. Defaults to 'text' | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | `?(string[])` | Optional | Only applicable when input_type is radio or dropdown. Empty strings will not be submitted. | getEnum(): ?array | setEnum(?array enum): void |

## Example (as JSON)

```json
{
  "name": "my_field",
  "scope": {
    "csv": "0",
    "invoices": "0",
    "statements": "0",
    "portal": "0",
    "public_show": "0",
    "public_edit": "0"
  },
  "input_type": "text",
  "enum": [
    "string"
  ]
}
```

