
# Metafield Scope

Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings.

## Structure

`MetafieldScope`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `csv` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from the csv export. | getCsv(): ?string | setCsv(?string csv): void |
| `invoices` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from invoices. | getInvoices(): ?string | setInvoices(?string invoices): void |
| `statements` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from statements. | getStatements(): ?string | setStatements(?string statements): void |
| `portal` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from the portal. | getPortal(): ?string | setPortal(?string portal): void |
| `publicShow` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from being viewable by your ecosystem. | getPublicShow(): ?string | setPublicShow(?string publicShow): void |
| `publicEdit` | [`?string(IncludeOption)`](../../doc/models/include-option.md) | Optional | Include (1) or exclude (0) metafields from being edited by your ecosystem. | getPublicEdit(): ?string | setPublicEdit(?string publicEdit): void |
| `hosted` | `?(string[])` | Optional | - | getHosted(): ?array | setHosted(?array hosted): void |

## Example (as JSON)

```json
{
  "csv": "0",
  "invoices": "0",
  "statements": "0",
  "portal": "0",
  "public_show": "0"
}
```

