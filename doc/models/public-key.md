
# Public Key

## Structure

`PublicKey`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `publicKey` | `?string` | Optional | - | getPublicKey(): ?string | setPublicKey(?string publicKey): void |
| `requiresSecurityToken` | `?bool` | Optional | - | getRequiresSecurityToken(): ?bool | setRequiresSecurityToken(?bool requiresSecurityToken): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example (as JSON)

```json
{
  "public_key": "public_key8",
  "requires_security_token": false,
  "created_at": "2016-03-13T12:52:32.123Z"
}
```

